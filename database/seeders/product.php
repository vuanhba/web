<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\ProductsModel;
class product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $data = [];
        for ($i=0; $i < 100; $i++) { 
            $data['name'] = $faker->name;
            $data['price'] = $faker->randomFloat(2, 1, 100);
            $data['image'] = $faker->imageUrl();
            $data['title'] = $faker->sentence;
            $data['quantity'] = rand(1, 5);
            $data['weight'] = $faker->numberBetween(1, 10);
            $data['dimension'] = rand(1, 5);
            $data['material'] = $faker->word;
            $data['color'] = $faker->safeColorName;
            $data['status'] = $faker->boolean(80);
            $data['id_category'] = $faker->numberBetween(1,5);
            ProductsModel::insert($data);
        }
    }
}
