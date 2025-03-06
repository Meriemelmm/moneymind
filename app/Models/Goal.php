<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $fillable = [
        'montant_objectif',
        'user_id',
        'month'

        
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
