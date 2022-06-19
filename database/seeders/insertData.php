<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class insertData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 20; $i++) {

            DB::table('customers')->insert([
                "first_name" => $faker->firstname(),
                "last_name" => $faker->lastname(),
                "email" => $faker->email(),
                "password" =>$faker->password(),
                "mobile_no" => 1234567890,
                "gender" => 'male',
                "age" => '25',
                "city" => 'surat',
                "pincode" => "253251",
                "hobby" => $faker->jobTitle(),
                "image" => 'images/b.jpg',
            ]);

        }
    }
}
