<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function categories(){
        return $this->belongsToMany(Categorie::class, "produits_categories", "produit_id", "categorie_id");
    }
}
