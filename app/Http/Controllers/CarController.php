<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;


class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', ['cars' => $cars]);
    }

    public function create()
    {
        return view('cars/create');
    }

    public function store(Request $request)
    {
        Car::create($request->all());
        return redirect()
            ->route('cars.index')
            ->with('succes', 'Masina a fost adaugat cu succes');
    }
    
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
