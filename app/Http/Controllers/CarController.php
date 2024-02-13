<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;


class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $validated = $request->validate([
            'model' => 'required|max:255',

        ]);
        $car->model = $request-> model;  
        $car->save();
        return redirect() -> route('cars.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {   
        
        $car->delete();
        return redirect() ->back();
    }

}
