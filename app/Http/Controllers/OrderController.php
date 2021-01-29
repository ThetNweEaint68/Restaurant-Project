<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function form()
    {
        return view('order.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'price'    => 'required'
        ]);

        Order::create($request->all());
        return back()->with("success", "Thank You For Your Order");
    }

    public function index()
    {
        $order = Order::all();
        return view('order.index', ["order" => $order]);
    }

    public function edit(Order $order)
    {
        return view('order.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'price'    => 'required'
        ]);

        $order = Order::find($id);
        $order->update($request->all());

        return redirect()->route('order.index')
            ->with('success', 'Order Has Been updated successfully');
    }

    public function destroy(Order $order, $id)
    {
        Order::find($id)->delete();
        return redirect()->route('order.index')
            ->with('success', 'Order has been deleted successfully');
    }
}
