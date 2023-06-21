<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class category extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            ['name' => 'iphone 5' , 'deprecation' => 'sản phẩm thuộc hệ sinh thái apple trực thuộc iphone 5' , 'image' => 'ảnh iphone5'],
            ['name' => 'iphone 6' , 'deprecation' => 'sản phẩm thuộc hệ sinh thái apple trực thuộc iphone 6' , 'image' => 'ảnh iphone5'],
            ['name' => 'iphone 7' , 'deprecation' => 'sản phẩm thuộc hệ sinh thái apple trực thuộc iphone 7' , 'image' => 'ảnh iphone5'],
            ['name' => 'iphone 8' , 'deprecation' => 'sản phẩm thuộc hệ sinh thái apple trực thuộc iphone 8' , 'image' => 'ảnh iphone5'],
            ['name' => 'iphone 9' , 'deprecation' => 'sản phẩm thuộc hệ sinh thái apple trực thuộc iphone 9' , 'image' => 'ảnh iphone5']
        ];
        DB::table('tb_category')->insert($category);
    }
}
