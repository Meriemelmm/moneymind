<?php

namespace App\Console\Commands;
use Carbon\Carbon;


use Illuminate\Console\Command;

use  App\Models\Depense; 
use Illuminate\Support\Facades\Auth;
class budgetCommande extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:budget-commande';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $depenses = Depense::all();
        foreach($depenses as $depense){

            if ($depense->type === "recurrent") {
                if($depense->date_recurrence=== Carbon::now()->day){


                    $depense->user->budget=$depense->user->budget-$depense->montant;
                    $depense->user->save();
                }

                // $this->info("La dépense {$depense->name_depense} est récurrente.");
            } else {
                // $this->info("La dépense {$depense->name_depense} n'est pas récurrente .");
                if($depense->date_depense ===Carbon::now()->toDateString() ){


                    $depense->user->budget=$depense->user->budget-$depense->montant;
                    $depense->user->save();
                }
            }

         
    }
}}
