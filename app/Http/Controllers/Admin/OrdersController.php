<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Orders\StoreRequest;
use App\Http\Requests\Orders\UpdateRequest;
use App\Models\order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data = Order::paginate();

        return view('admin.orders.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.orders.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        Order::create($data);

        return to_route('orders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(order $order): View
    {
        $data = 1;

        return view('admin.orders.index', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order): View
    {
        return view('admin.orders.index', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, order $order): RedirectResponse
    {
        $data = $request->validated();

        $order->create($data);

        return to_route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order): RedirectResponse
    {
        $order->delete();

        return to_route('orders.index');
    }
}
