<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('vi_VN');
        foreach (range(1, 10) as $index) {
            DB::table('states')->insert([
                'name' => $faker->city(),
                'country_id' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
