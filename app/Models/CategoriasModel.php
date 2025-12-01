<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoriasModel extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['name', 'slug'];

    public function productos(): HasMany
    {
        return $this->hasMany(ProductosModel::class);
    }
}
