<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
 
    protected $fillable = [
        'name_depense',
        'montant',
        'date_depense',
        'type',
        'user_id',
        'categorie_id',
        
    ];
    public function depensable()
    {
        return $this->morphTo();
    }


}
