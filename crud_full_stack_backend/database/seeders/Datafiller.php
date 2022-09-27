<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\register;


class Datafiller extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 10; $i++) {
            $Faker = \Faker\Factory::create();
            $register = new register;
            $register->first_name = $Faker->name();
            $register->last_name = $Faker->name();
            $register->email = $Faker->email();
            $register->password = Str::random(5);
            $register->country = $Faker->country();
            $register->save();
        }
    }
}
