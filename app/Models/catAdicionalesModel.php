<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class catAdicionalesModel extends Model
{
    //
    protected $table = 'cat_adicionales';
    
    protected $fillable = [
        'id',
        'name',
        'slug',
    ];


}
