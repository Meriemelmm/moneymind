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
        'date_recurrence',
        'date_depense',
        
    ];
   
    public function user()
{
    return $this->belongsTo(User::class); 
}
public function categorie(){
    return $this->belongsTo(Categorie::class);
}


}
