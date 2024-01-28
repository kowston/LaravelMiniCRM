<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRoles\StoreRequest;
use App\Http\Requests\UserRoles\UpdateRequest;
use App\Models\userRole;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data = UserRole::paginate();

        return view('admin.user-roles.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.user-roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        UserRole::create($data);

        return to_route('user-roles.index');        //
    }

    /**
     * Display the specified resource.
     */
    public function show(userRole $userRole): View
    {
        return view('admin.user-roles.show', compact('userRole'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(userRole $userRole): View
    {
        return view('admin.user-roles.edit', compact('userRole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, userRole $userRole): RedirectResponse
    {
        $data = $request->validated();

        $userRole->create($data);

        return to_route('user-roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(userRole $userRole): RedirectResponse
    {
        $userRole->delete();

        return to_route('user-roles.index');
    }
}
