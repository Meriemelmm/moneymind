<?php

namespace App\Models;
use App\Models\Depense;

use Illuminate\Database\Eloquent\Model;


class RecurrentDepense extends Depense
{
    
    protected $fillable = [
        'name_depense',
        'montant',
        'date_depense',
        'type',
        'user_id',
        'categorie_id',
        'date_recurrence',
        
    ];
    public function depense()
    {
        return $this->morphOne(Depense::class, 'depensable');
    }
}
