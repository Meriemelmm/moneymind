<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MyCustomCommand extends Command
{
     /**
     * Le nom et la signature de la commande.
     *
     * @var string
     */
    protected $signature = 'app:send-daily-report';

    /**
     * La description de la commande.
     *
     * @var string
     */
    protected $description = 'Envoyer le rapport quotidien';

    /**
     * Exécution de la commande.
     *
     * @return void
     */
    public function handle()
    {
        // Logique de votre tâche ici
        $this->info('Lhbfbhsdshhbs.');
    }
}
