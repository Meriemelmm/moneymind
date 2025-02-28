<?php

use Illuminate\Support\Facades\DB;
use App\Models\Depense;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schedule;

Schedule::call(function () {
    // Récupérer toutes les dépenses récurrentes
    $depenses = DB::table('depenses')->where('type', 'recurrent')->get(); 
    
    foreach ($depenses as $depense) {
        if ($depense->type === "recurrent") {

            // Créer une nouvelle dépense récurrente
            $newdepense = new Depense();
            $newdepense->name_depense = $depense->name_depense;
            $newdepense->montant = $depense->montant;
            $newdepense->date_recurrence = $depense->date_recurrence;
            $newdepense->categorie_id = $depense->categorie_id;
            $newdepense->type = $depense->type;
            $newdepense->user_id = $depense->user_id;  // Correction ici : Auth::id() directement

           
            $newdepense->save();





                    }
    }
})->dailyAt('12:50');
 









