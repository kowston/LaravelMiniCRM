<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserProfiles\StoreRequest;
use App\Http\Requests\UserProfiles\UpdateRequest;
use App\Models\userProfile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data = UserProfile::paginate();

        return view('admin.user-profiles.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.user-profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        UserProfile::create($data);

        return to_route('user-profiles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(userProfile $userProfile): View
    {
        return view('admin.user-profiles.show', compact('userProfile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(userProfile $userProfile): View
    {
        return view('admin.user-profiles.edit', compact('userProfile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, userProfile $userProfile): RedirectResponse
    {
        $data = $request->validated();

        $userProfile->create($data);

        return to_route('user-profiles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(userProfile $userProfile): RedirectResponse
    {
        $userProfile->delete();

        return to_route('user-profiles.index');
    }
}
