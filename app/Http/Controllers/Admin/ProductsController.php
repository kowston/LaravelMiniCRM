<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Products\StoreRequest;
use App\Http\Requests\Statuses\UpdateRequest;
use App\Models\product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data = Product::paginate();

        return view('admin.products.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        Product::create($data);

        return to_route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product): View
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product): View
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, product $product): RedirectResponse
    {
        $data = $request->validated();

        $product->create($data);

        return to_route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product): RedirectResponse
    {
        $product->delete();

        return to_route('products.index');
    }
}
