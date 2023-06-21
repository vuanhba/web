<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    use HasFactory;

    protected $table = 'tb_products';

    protected $fillable = [
        'name' , 
        'price' , 
        'image' , 
        'title' , 
        'quantity' , 
        'weight' , 
        'dimension' , 
        'material' , 
        'color' , 
        'status' , 
        'id_category'
    ];

    public function getCate()
    {
        $cate = CategoryModel::find($this->id_category);
        return $cate;
    }
}
