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

    /**
     * Store a newly created resource in storage.
     */
//     public function store(Request $request)
//     {

       
 
//         $validated = $request->validate([
//             'name_depense' => ['required', 'string', 'max:225'],
//             'montant' => ['required', 'numeric'],
//             'type' => ['required', 'in:non recurrent,recurrent'],
            
//           'date_recurrence' => [Rule::requiredIf($request->type === 'recurrent'), 'integer', 'min:1', 'max:31'], 
//             'date_depense' => [Rule::requiredIf($request->type === 'non recurrent'),'date'],
            
//         ]);  
       
        
//        if($request->type==="recurrent"){
      
//         // $depense = Depense::create([
//         //     'name_depense' => $validated['name_depense'],
//         //     'montant' => $validated['montant'],
//         //     'type' => $validated['type'],
//         //     'date_recurrence' => $validated['date_recurrence'],
//         //     'user_id' => Auth::id(),
//         //     'categorie_id' => $request->categorie_id
//         // ]);
//         Schedule::call(function () use($request,$validated) {
//             $depense = Depense::create([
//                 'name_depense' => $validated['name_depense'],
//                 'montant' => $validated['montant'],
//                 'type' => $validated['type'],
//                 'date_recurrence' => $validated['date_recurrence'],
//                 'user_id' => Auth::id(),
//                 'categorie_id' => $request->categorie_id
//             ]);
            
//             if ($depense) {
//               return " true";
//             } else {
//                 return " non true";
//         }
//     })->everyMinute();
// }


       
//        else{
      
        
       
//         $depense=Depense::create(['name_depense'=>$validated['name_depense'],
//         'montant'=>$validated['montant'],
//         'type'=>$validated['type'],
//         'date_depense'=>$validated['date_depense'],
//         'user_id'=>Auth::id(),'categorie_id'=>$request->categorie_id
     
     
     
//         ]);
//         if($depense){
//             return "true";
//            }
//            else{
//             return " non true";
//            }}
        
//     }
public function store(Request $request)
{
    // Validation des données
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
            
       
        // Schedule::call(function () use ($request, $validated) {
          
        
        if ($depense) {
            return "Dépense créée avec succès.";
        } else {
            return "Échec de la création de la dépense.";
        }    
           
           
        // })->everyMinute();  


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
            return "Dépense créée avec succès.";
        } else {
            return "Échec de la création de la dépense.";
        }
    }
}


    
    

    
    public function show(string $id)
    {
        //
    }

    

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
