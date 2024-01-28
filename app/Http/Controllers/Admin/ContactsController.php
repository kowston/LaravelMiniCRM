<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Contacts\StoreRequest;
use App\Http\Requests\Contacts\UpdateRequest;
use App\Models\contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\View\View;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data = Contact::paginate();

        return view('admin.contacts.index', compact('data'));
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

        Contact::create($data);

        return to_route('contacts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact): View
    {
        return view('admin.contacts.index', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact): View
    {
        return view('admin.contacts.index', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, contact $contact): RedirectResponse
    {
        $data = $request->validated();

        $contact->create($data);

        return to_route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact): RedirectResponse
    {
        $contact->delete();

        return to_route('contacts.index');
    }
}
