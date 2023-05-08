<?php

namespace App\Http\Controllers;

use App\Models\dish;
use App\Models\restaurant;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dish.search', [
            'dishes' => dish::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dish.create', [
            'dish' => null,
            'restaurants' => restaurant::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'restaurant_id' => 'required',
            'name' => 'required|regex:/^([A-Za-zÑñ\s]+[áéíóú]?[A-Za-z]*)$/iu|between:3,50',
            'price' => 'required|integer|between:1000,800000',
            'category' => 'required',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'state' => 'required'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/dishes/'), $imageName);

        $request->dishes()->create([
            'restaurant_id' => $request->restaurant_id,
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'description' => $request->description,
            'image' => $imageName,
            'state' => $request->state
        ]);

        return redirect()->route('dish.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(dish $dish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dish $dish)
    {
        return view('dish.edit', ['dish' => $dish, 'restaurants' => restaurant::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dish $dish)
    {
        $request->validate([
            'restaurant_id' => 'required',
            'name' => 'required|regex:/^([A-Za-zÑñ\s]+[áéíóú]?[A-Za-z]*)$/iu|between:3,50',
            'price' => 'required|integer|between:1000,800000',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'state' => 'required'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/dishes/'), $imageName);

        $dish->update([
            'restaurant_id' => $request->restaurant_id,
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'description' => $request->description,
            'image' => $imageName,
            'state' => $request->state
        ]);

        return redirect()->route('dish.edit', $dish);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dish $dish)
    {
        $dish->delete();
        return back();
    }
}
