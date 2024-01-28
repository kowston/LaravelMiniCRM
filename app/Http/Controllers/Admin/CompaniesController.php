<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Companies\StoreRequest;
use App\Http\Requests\Companies\UpdateRequest;
use App\Models\company;
use Illuminate\Http\RedirectResponse
use Illuminate\View\View;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data = Company::paginate();

        return view('admin.companies.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
         return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $repId = auth()->id();

        $data = $request->validated();
        $data['rep_id'] = $repId;

        Company::create($data);

        return to_route('companies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(company $company): View
    {
        return view('admin.companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(company $company): View
    {
        return view('admin.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, company $company): RedirectResponse
    {
        $data = $request->validated();

        $company->create($data);

        return to_route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(company $company): RedirectResponse
    {
        $company->delete();

        return to_route('companies.index');
    }
}
