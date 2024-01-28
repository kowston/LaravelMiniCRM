<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductCats\StoreRequest;
use App\Http\Requests\ProductCats\UpdateRequest;
use App\Models\productCat;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductCatsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data = ProductCat::paginate();

        return view('admin.product-cats.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.product-cats.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        ProductCat::create($data);

        return to_route('product-cats.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(productCat $productCat): View
    {
       return view('admin.product-cats.index', compact('productCat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(productCat $productCat): View
    {
        return view('admin.product-cats.index', compact('productCat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, productCat $productCat): RedirectResponse
    {
        $data = $request->validated();

        $productCat->create($data);

        return to_route('product-cats.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(productCat $productCat): RedirectResponse
    {
        $productCat->delete();

        return to_route('product-cats.index');
    }
}
