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


Schedule::call(function () {
    $users = User::all(); 

    foreach ($users as $user) {
       
        if ($user->dateCreditSalaire == Carbon::now()->day) {
            
            $user->budget += $user->salaire;
            $user->nombre_credit_salaire += 1;
            $user->save();
        }
    }
})->cron('39 12 * * *');





Schedule::call(function () {
   
    $depenses = Depense::all();
    foreach($depenses as $depense){

        if ($depense->type === "recurrent") {
            if($depense->date_recurrence=== Carbon::now()->day){


                $depense->user->budget-=$depense->montant;
                $depense->user->save();
            }

            
        } else {
            // $this->info("La dépense {$depense->name_depense} n'est pas récurrente .");
            if($depense->date_depense ===Carbon::now()->toDateString() ){


                $depense->user->budget=$depense->user->budget-$depense->montant;
                $depense->user->save();
            }
        } 
        $depense->user->budget-=$depense->montant;
        $depense->user->save();

     
}

    }
)->cron('57 12 * * *');

//  goals  il doit ajouter 
// Schedule::call(function () {
//     $users = User::all();

//     foreach ($users as $user) {
//         $currentMonth = Carbon::now()->format('Y-m');

//         foreach ($user->goals as $goal) {
//             if ($goal->month == $currentMonth) {
                
//                 $montant_objectif = $goal->montant_objectif;

               
//                 if ($user->budget >= $montant_objectif) {
//                     $user->budget -= $montant_objectif;
//                     $goal->montant_epargne += $montant_objectif;

                   
//                     $user->save();
//                     $goal->save();
//                 }
//                 else{   $goal->montant_epargne += $user->budget;
//                     $user->budget -= $user->budget;
                 

                   
//                     $user->save();
//                     $goal->save();
//                 }
//             }
//         }
//     }
// })->dailyAt('14:44');


// // lastDayOfMonth('15:00');

// //  bord User  :
// // Schedule::call(function(){
// //     $user= new UserController();
// //     $user->static();
// // })->dailyAt('16:23');

// // task de souhaits :
// Schedule::call(function(){
// $users= User::all();
// foreach( $users as $user){
//     $currentMonth = Carbon::now()->format('Y-m');
//     foreach($user->goals as $goal){
//         if($goal->month=== $currentMonth){
//             foreach($user->wishlists as $wish ){
//                 if ($wish->status === "pending" && $goal->montant_epargne >= $wish->prix_total) {
//                 $wish->montant_economise=$wish->prix_total;
//                 $goal->montant_epargne=$goal->montant_epargne-$wish->prix_total;
//                 $wish->status="completed";
//                 $goal->save();
//                 $wish->save();
               


//                 }
//                 else{
//                 $wish->montant_economise=$goal->montant_epargne;
//                 $goal->montant_epargne-=$goal->montant_epargne;
//                 $goal->save();
//                 $wish->save();
//                 }
                
//             }
//         }

//     }

// }



// })->dailyAt('15:31');
Schedule::call(function() {
    $users = User::all();

    // Récupérer le mois courant
    $currentMonth = Carbon::now()->format('Y-m');

    foreach ($users as $user) {
        
        foreach ($user->goals as $goal) {
            if ($goal->month === $currentMonth) {
                
                foreach ($user->wishlists as $wish) {
                    if ($wish->status === "pending") {
                        if ($goal->montant_epargne >= $wish->prix_total) {
                         
                            $wish->montant_economise = $wish->prix_total;
                            $goal->montant_epargne -= $wish->prix_total; 
                            $wish->status = "completed"; 
                        } else {
                          
                            if ($wish->montant_economise > 0) {
                                
                                $remainingAmount = $wish->prix_total - $wish->montant_economise;
                                if ($goal->montant_epargne >= $remainingAmount) {
                                    
                                    $wish->montant_economise = $wish->prix_total;
                                    $goal->montant_epargne -= $remainingAmount;
                                    $wish->status = "completed";  
                                } else {
                                    
                                    $wish->montant_economise += $goal->montant_epargne;
                                    $goal->montant_epargne = 0;  
                                }
                            } else {
                               
                                $wish->montant_economise = $goal->montant_epargne;
                                $goal->montant_epargne = 0; 
                            }
                        }
                        
                        $goal->save();
                        $wish->save();
                    }
                }
            }
        }
    }
})->dailyAt('15:43');






















 









