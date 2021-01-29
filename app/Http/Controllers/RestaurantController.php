<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurant = Restaurant::all();
        return view('restaurant.list', ["restaurant" => $restaurant]);
    }

    public function create()
    {
        return view('restaurant.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required',
            'address' => 'required'
        ]);

        Restaurant::create($request->all());
        return redirect('/restaurant')
        ->with('success', 'Restaurant has been created successfully.');
    }

    public function edit(Restaurant $restaurant)
    {
        return view('restaurant.edit', compact('restaurant'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required',
            'address' => 'required'
        ]);

        $restaurant = Restaurant::find($id);
        $restaurant->update($request->all());

        return redirect()->route('restaurant.index')
            ->with('success', 'Restaurant Has Been updated successfully');
    }

    public function destroy(Restaurant $restaurant, $id)
    {
        Restaurant::find($id)->delete();
        return redirect()->route('restaurant.index')
            ->with('success', 'Restaurant has been deleted successfully');
    }
}
