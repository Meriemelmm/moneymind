<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Goal;

class GoalController extends Controller
{
    
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        
        $validated=$request->validate(['montant_objectif'=>['required','numeric']]);
        $goal= Goal::create([
            'montant_objectif'=>$validated['montant_objectif'],
            'user_id'=>Auth::id(),
            'month'=>$request->month
        ]);
        if($goal){
            return redirect()->route('depenses');

        }
        else{
            return "incorrect";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
