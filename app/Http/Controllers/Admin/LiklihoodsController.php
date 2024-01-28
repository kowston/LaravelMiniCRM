<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Liklihoods\StoreRequest;
use App\Http\Requests\Liklihoods\UpdateRequest;
use App\Models\liklihood;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LiklihoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data = Liklihood::paginate();

        return view('admin.liklihoods.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.contacts.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        Liklihood::create($data);

        return to_route('liklihoods.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(liklihood $liklihood): View
    {
        return view('admin.liklihoods.index', compact('liklihood'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(liklihood $liklihood): View
    {
        return view('admin.liklihoods.index', compact('liklihood'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, liklihood $liklihood): RedirectResponse
    {
        $data = $request->validated();

        $liklihood->create($data);

        return to_route('likelihoods.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(liklihood $liklihood): RedirectResponse
    {
        $liklihood->delete();

        return to_route('liklihoods.index');
    }
}
