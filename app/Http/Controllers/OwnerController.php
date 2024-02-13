<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        $owners = Owner::all();
        return view('owners.index', ['owners' => $owners]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('owners/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(Request $request, Owner $owner)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        $owner->name = $request-> name;
  
        $owner->save();
        return redirect() -> route('owners.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Owner $owner)
    {   
        
        $owner->delete();
        return redirect() ->back();
    }

}
