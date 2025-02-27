<?php

namespace App\Http\Controllers;
use App\Models\Depense;
 use Illuminate\Support\Facades\Auth;

use App\Models\Categorie;
use App\Models\RecurrentDepense;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;

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
            
//           'date_recurrence' => ['required', 'integer', 'min:1', 'max:31'], 
//             'date_depense' => [ 'date'],
            
//         ]);  
        
//        if($request->type==="recurrent"){
      
//         $depense = Depense::create([
//             'name_depense' => $validated['name_depense'],
//             'montant' => $validated['montant'],
//             'type' => $validated['type'],
//             'date_recurrence' => $validated['date_recurrence'],
//             'user_id' => Auth::id(),
//             'categorie_id' => $request->categorie_id
//         ]);
       
//    if($depense){
//     return "true";
//    }
//    else{
//     return " non true";
//    }

//        }
//        else{
       
//         $depense=RecurrentDepense::create(['name_depense'=>$validated['name_depense'],
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

    /**
     * Display the specified resource.
     */
    public function store(Request $request)
     {
        // Validation des données
        $validated = $request->validate([
            'name_depense' => ['required', 'string', 'max:225'],
            'montant' => ['required', 'numeric'],
            'type' => ['required', 'in:non recurrent,recurrent'],
            'date_recurrence' => ['required_if:type,recurrent', 'integer', 'min:1', 'max:31'], // Validation de la date_recurrence pour les récurrences
            'date_depense' => ['nullable', 'date'], // Date de dépense si ce n'est pas récurrent
        ]);

        // Si c'est une dépense récurrente
        if ($request->type === 'recurrent') {
            // On crée une RecurrentDepense
            $depense = RecurrentDepense::create([
                'name_depense' => $validated['name_depense'],
                'montant' => $validated['montant'],
                'type' => $validated['type'],
                'date_recurrence' => $validated['date_recurrence'],
                'user_id' => Auth::id(),
                'categorie_id' => $request->categorie_id,
            ]);
        } else {
            // Sinon, on crée une Depense classique
            $depense = Depense::create([
                'name_depense' => $validated['name_depense'],
                'montant' => $validated['montant'],
                'type' => $validated['type'],
                'date_depense' => $validated['date_depense'],
                'user_id' => Auth::id(),
                'categorie_id' => $request->categorie_id,
            ]);
        }

        // Vérification de l'insertion
        if ($depense) {
            return "true";
        } else {
            return "non true";
        }
     }
   

    
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
