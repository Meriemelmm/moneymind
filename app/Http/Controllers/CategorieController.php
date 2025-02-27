<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use Dotenv\Exception\ValidationException;
use Illuminate\Auth\Events\Validated;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('categorie');
    }

    public function store(Request $request)
    {


        $validated = $request->validate(['name_categorie' => ['required', 'string', 'max:225']]);

        $categorie = Categorie::create(['name_categorie' => $request->name_categorie]);

        if ($categorie) {
            return redirect()->route('show.categorie');
        }
    }
    public function showCategories()
    {

        $categories = Categorie::all();
        return view('categorie', ['categories' => $categories]);
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
    // public function edit( Request $request,$editid )
    // { 
    //     try{
    //          $categories= Categorie::find($editid);
    //     if($categories){
    //         return view('update',compact('categories'));}
    //     else{
    //         return " nays";

    //     } 
    //     }
    //     catch( ValidationException $e){
    //         return " erreur".$e->getMessage();
    //     }



    // }
    public function edit(Request $request, $editid)
    {
        try {


            $categories = Categorie::find($editid);
            if ($categories) {
                return view('update', ['name' => $categories->name_categorie, 'update_id' => $categories->id]);
            } else {

                // return redirect()->route('categories.index')->with('error', 'Catégorie non trouvée');
                return view('update');
            }
        } catch (\Exception $e) {

            return "erreur";
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $updateid)
    {

        $categorie = Categorie::find($updateid);
        if ($categorie) {
            $categorie->update(['name_categorie' => $request->name_categorie]);
            return redirect()->route('show.categorie');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($categorieid)
    {
        $categorie = Categorie::find($categorieid);
        $categorie->delete();

        return redirect()->route('show.categorie');
    }

    // public function addView()
    // {
    //     $categories = Categorie::all();
    //     return view('welcome', [
    //         "categories" => $categories,
    //     ]);
    // }
}
