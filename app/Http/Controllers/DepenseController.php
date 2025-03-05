<?php

namespace App\Http\Controllers;
use App\Models\Depense;
 use Illuminate\Support\Facades\Auth;

use App\Models\Categorie;
use App\Models\RecurrentDepense;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades\Log;



class DepenseController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return view('ajouter', compact('categories'));
    }
    

   
     
    public function create()
    {
        //
    }

//    

public function store(Request $request)
{
    
    $validated = $request->validate([
        'name_depense' => ['required', 'string', 'max:225'],
        'montant' => ['required', 'numeric'],
        'type' => ['required', 'in:non recurrent,recurrent'],
        'date_recurrence' => [Rule::requiredIf($request->type === 'recurrent'), 'integer', 'min:1', 'max:31'],
        'date_depense' => [Rule::requiredIf($request->type === 'non recurrent'), 'date'],
    ]);

  
    if ($request->type === "recurrent") {
        
        $depense = Depense::create([
                'name_depense' => $validated['name_depense'],
                'montant' => $validated['montant'],
                'type' => $validated['type'],
                'date_recurrence' => $validated['date_recurrence'],
                'user_id' => Auth::id(),
                'categorie_id' => $request->categorie_id
            ]);
            
       
      
          
        
        if ($depense) {
            return "Dépense créée avec succès.";
        } else {
            return "Échec de la création de la dépense.";
        }    
           
           
      


    } else {
       
        $depense = Depense::create([
            'name_depense' => $validated['name_depense'],
            'montant' => $validated['montant'],
            'type' => $validated['type'],
            'date_depense' => $validated['date_depense'],
            'user_id' => Auth::id(),
            'categorie_id' => $request->categorie_id
        ]);

        if ($depense) {
            return  redirect()->route('depenses');
        } else {
            return "Échec de la création de la dépense.";
        }
    }
}


     
    

public function specifique()
{
    
    $depenses = Depense::with('user','categorie')->where('user_id', Auth::id())->get();

   
    if ($depenses->isEmpty()) {
       
        return view('gestionDepense',['depenses'=>$depenses]);
    } else {
     
        return view('gestionDepense',['depenses'=>$depenses]);
    }
}



    

    public function edit($depenseid)
    {
        $categories=Categorie::all();
        
        $depense=Depense::find($depenseid);
        return view('editDepense',['depenses'=> $depense,'categories'=>$categories]);
    }

    
    
    public function update(Request $request, string $depenseid)
    {

        $depense = Depense::find($depenseid);
        if($depense){
           


       $validated = $request->validate([
            'name_depense' => ['required', 'string', 'max:225'],
            'montant' => ['required', 'numeric'],
            'type' => ['required', 'in:non recurrent,recurrent'],
            'date_recurrence' => [Rule::requiredIf($request->type === 'recurrent'), 'integer', 'min:1', 'max:31'],
            'date_depense' => [Rule::requiredIf($request->type === 'non recurrent'), 'date'],
        ]);
       
    
        $updated=$depense->update([
            'name_depense' => $validated['name_depense'],
            'montant' => $validated['montant'],
            'type' => $validated['type'],
            
            'categorie_id' => $request->categorie_id,
            'date_recurrence' => $request->type === 'recurrent' ? $validated['date_recurrence'] : null, 
            'date_depense' => $request->type === 'non recurrent' ? $validated['date_depense'] : null, 
        ]);
        if ($updated) {
            return  redirect()->route('depenses');
        } else {
            return "Échec de la création de la dépense.";
        }
        }
        
        
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($removedid)
    {
        $depense= Depense::find($removedid);
        if($depense){
              $depense->delete();
        return   redirect()->route('depenses');
        }
        else{
            return " nexiste pas";
        }
      
        
    }
}
