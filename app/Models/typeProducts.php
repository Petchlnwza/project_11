<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class typeProducts extends Model
{
    use HasFactory,softDeletes;
    protected $table = 'type_product';
    protected $fillable = {
        'name',
    };
    
}
