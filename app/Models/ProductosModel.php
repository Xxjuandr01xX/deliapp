<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductosModel extends Model
{
    protected $table = 'productos';
    
    protected $fillable = [
      'id',	
      'name',	
      'slug',	
      'image',	
      'price',	
      'categoria_id' 
    ];

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(CategoriasModel::class);
    }
}
