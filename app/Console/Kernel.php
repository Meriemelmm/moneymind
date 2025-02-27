<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Enregistrer les commandes Artisan.
     *
     * @var array
     */
    protected $commands = [
        // Enregistrement de la commande personnalisée
        Commands\MyCustomCommand::class,
    ];

    /**
     * Définir les tâches planifiées.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // Planification de la commande pour s'exécuter tous les jours à minuit
        $schedule->command('app:send-daily-report')->dailyAt('12:06');
    }

    /**
     * Définir les commandes Artisan disponibles.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
    }
}
