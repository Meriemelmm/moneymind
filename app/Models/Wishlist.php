<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    
   
    protected $fillable = ['user_id', 'souhait', 'prix_total', 'montant_economise'];

}
