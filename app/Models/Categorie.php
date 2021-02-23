<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function produits(){
        return $this->belongsToMany(Produit::class, "produits_categories", "categorie_id", "produit_id");
    }

}
