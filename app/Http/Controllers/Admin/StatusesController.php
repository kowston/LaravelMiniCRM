<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Statuses\StoreRequest;
use App\Http\Requests\Statuses\UpdateRequest;
use App\Models\status;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StatusesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data = Status::paginate();

        return view('admin.statuses.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.statuses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        Status::create($data);

        return to_route('statues.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(status $status): View
    {
        return view('admin.statuses.show', compact('status'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(status $status): View
    {
        return view('admin.statuses.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, status $status): RedirectResponse
    {
        $data = $request->validated();

        $product->create($data);

        return to_route('statues.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(status $status): RedirectResponse
    {
        $status->delete();

        return to_route('statues.index');
    }
}
