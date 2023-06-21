<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandsModel extends Model
{
    use HasFactory;

    protected $table = 'tb_brand';

    protected $fillable = [
        'name' , 
        'deprecation' ,
        'image'
    ];
}
