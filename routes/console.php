<?php

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Depense;
use App\Models\Goal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Http\Controllers\UserController;

// Schedule::call(function () {
//     // Récupérer toutes les dépenses récurrentes
//     $depenses = DB::table('depenses')->where('type', 'recurrent')->get(); 
    
//     foreach ($depenses as $depense) {
//         if ($depense->type === "recurrent") {

//             // Créer une nouvelle dépense récurrente
//             $newdepense = new Depense();
//             $newdepense->name_depense = $depense->name_depense;
//             $newdepense->montant = $depense->montant;
//             $newdepense->date_recurrence = $depense->date_recurrence;
//             $newdepense->categorie_id = $depense->categorie_id;
//             $newdepense->type = $depense->type;
//             $newdepense->user_id = $depense->user_id;  // Correction ici : Auth::id() directement

           
//             $newdepense->save();





//                     }
//     }
// })->dailyAt('12:50');

// $userid=Auth::id();
// Schedule:: call(function (){
//     $user = User::find(Auth::id());

//     if ($user) {
       
        
//         $user->nombre_credit_salaire += 1;

      
//         $user->save();
//  function index()
// {
// $users=User::where('dateCreditSalaire','<',Carbon::now()->day(dateCreditSalaire))
// ->where('role', '=', 'user')
// ->get();


//     return view('gestion_user',['users'=>$users]);

// }
// public function (){
//    $user =User::find(Auth::id());
// if($user->dateCreditSalaire=Carbon::now->day){
//     $user->budjet+=$user->salaire;
//     $user->save();
// }
// }
Schedule::call(function () {
    $users = User::all(); // Récupérer tous les utilisateurs

    foreach ($users as $user) {
        // Vérifier si la date de crédit du salaire correspond à aujourd'hui
        if ($user->dateCreditSalaire == Carbon::now()->day) {
            // Ajouter le salaire au budget
            $user->budget += $user->salaire;
            $user->nombre_credit_salaire += 1;
            $user->save();
        }
    }
})->cron('50 14 * * *');
/*
selecter tout les users
parcourir les users b foreach
si la date de credit est===aujourdhui 
appeler fonction changer les budget
utiliser cron
 
*/




Schedule::call(function () {
   
    $depenses = Depense::all();
    foreach($depenses as $depense){

        // if ($depense->type === "recurrent") {
        //     if($depense->date_recurrence=== Carbon::now()->day){


        //         $depense->user->budget-=$depense->montant;
        //         $depense->user->save();
        //     }

            
        // } else {
        //     // $this->info("La dépense {$depense->name_depense} n'est pas récurrente .");
        //     if($depense->date_depense ===Carbon::now()->toDateString() ){


        //         $depense->user->budget=$depense->user->budget-$depense->montant;
        //         $depense->user->save();
        //     }
        // } 
        $depense->user->budget-=$depense->montant;
        $depense->user->save();

     
}

    }
)->dailyAt('14:50');

//  goalq 
Schedule::call(function () {
    $users = User::all();

    foreach ($users as $user) {
        $currentMonth = Carbon::now()->format('Y-m');

        foreach ($user->goals as $goal) {
            if ($goal->month == $currentMonth) {
                
                $montant_objectif = $goal->montant_objectif;

               
                if ($user->budget >= $montant_objectif) {
                    $user->budget -= $montant_objectif;
                    $goal->montant_epargne += $montant_objectif;

                   
                    $user->save();
                    $goal->save();
                }
                else{   $goal->montant_epargne += $user->budget;
                    $user->budget -= $user->budget;
                 

                   
                    $user->save();
                    $goal->save();
                }
            }
        }
    }
})->dailyAt('16:00');
//  bord User  :
// Schedule::call(function(){
//     $user= new UserController();
//     $user->static();
// })->dailyAt('16:23');













 









