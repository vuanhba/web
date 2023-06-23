<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $faker = Factory::create('vi_VN');

        for($i = 0; $i<=5;$i++){
            // DB::table('accounts')->insert([
            //     'full_name' => $faker->name,
            //     'phone_number' => $faker->phoneNumber,
            //     'email' => $faker->email,
            //     'id_role'=>1,
            //     'password' => $faker->password,
            //     'address' => $faker->address,
            //     'image' => $faker->image
        
            // ]);
            DB::table('users')->insert([
             'name' => $faker->name,
                 'email' => $faker->email,
              'password' => $faker->password,



            ]);
        }

    }
}
