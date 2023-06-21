<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\BrandsModel;
class tb_brand extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $data = [];
        for ($i=0; $i < 6 ; $i++) { 
            $data['name'] = $faker->name;
            $data['image'] = $faker->imageUrl();
            $data['deprecation'] = $faker->sentence();
            BrandsModel::insert($data);
        }
    }
}
