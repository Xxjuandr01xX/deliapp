<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class catIngredientesModel extends Model
{
    protected $table = 'cat_ingredientes';
    
    protected $fillable = [
        'id',
        'name',
        'slug',
    ];

    public function ingredientes(): HasMany
    {
        return $this->hasMany(IngredientesModel::class);
    }
}
