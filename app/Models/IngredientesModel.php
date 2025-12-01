<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IngredientesModel extends Model
{
    protected $table = 'ingredientes';
    protected $fillable = [
       'id',
       'producto_id',
       'cat_ingredientes_id',
       'producto_id'
    ];

    public function cat_ingredientes(): BelongsTo
    {
        return $this->belongsTo(catIngredientesModel::class);
    }

    public function producto(): BelongsTo
    {
        return $this->belongsTo(ProductosModel::class);
    }
}
