<?php

namespace App\Http\Controllers;

use App\Models\restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        return view('restaurant.search', [
            'restaurants' => restaurant::all()
        ]);
    }

   
    public function create()
    {
        return view('restaurant.create', ['restaurant' => null]);
    }


    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|regex:/^([A-Za-zÑñ\s]+[áéíóú]?[A-Za-z]*)$/iu|between:3,50',
            'email' => 'required|email|max:255|min:10',
            'adress' => 'required|string',
            'phone' => 'required',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'link' => 'required|url'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/restaurants/'), $imageName);

        $request = restaurant::create([
            'name' => $request->name,
            'email' => $request->email,
            'adress' => $request->adress,
            'phone' => $request->phone,
            'description' => $request->description,
            'image' => $imageName,
            'link' => $request->link
        ]);

        return redirect()->route('restaurant.index');
    }

    public function show(restaurant $restaurant)
    {
        //
    }

    
    public function edit(restaurant $restaurant)
    {
        return view('restaurant.edit', ['restaurant' => $restaurant]);
    }

    public function update(Request $request, restaurant $restaurant)
    {
        $request->validate([
            'name' => 'required|regex:/^([A-Za-zÑñ\s]+[áéíóú]?[A-Za-z]*)$/iu|between:3,50',
            'email' => 'required|email|max:255|min:10',
            'adress' => 'required|string',
            'phone' => 'required',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'link' => 'required|url'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/restaurants/'), $imageName);

        $restaurant->update([
            'name' => $request->name,
            'email' => $request->email,
            'adress' => $request->adress,
            'phone' => $request->phone,
            'description' => $request->description,
            'image' => $imageName,
            'link' => $request->link
        ]);

        return redirect()->route('restaurant.edit', $restaurant);
    }


    public function destroy(restaurant $restaurant)
    {
        $restaurant->delete();
        return back();
    }
}