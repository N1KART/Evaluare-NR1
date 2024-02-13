<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use Illuminate\Http\Request;

class MechanicController extends Controller
{
    public function index()
    {
        $mechanics = Mechanic::all();
        return view('mechanics.index', ['mechanics' => $mechanics]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mechanics/create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function update(Request $request, Mechanic $mechanic)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        $mechanic->name = $request-> name;

        $mechanic->save();
        return redirect() -> route('mechanics.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mechanic $mechanic)
    {   
        
        $mechanic->delete();
        return redirect() ->back();
    }

}
