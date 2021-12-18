<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('student')->insert([
        //     'name'=>'Komal',
        //     'email'=>'Komal@gmail.com',
        //     'password'=>Hash::make('komal123')
        // ]);


        // DB::table('student')->insert([
        //     'name'=>Str::random(6),
        //     'email'=>Str::random(6).'@gmail.com',
        //     'password'=>Hash::make(Str::random(6))
        // ]);

        // foreach (range(1, 10) as $value) {
        //     DB::table('student')->insert([
        //         'name' => Str::random(6),
        //         'email' => Str::random(6) . '@gmail.com',
        //         'password' => Hash::make(Str::random(6))
        //     ]);
        // }
        $faker = Faker::create();
        foreach (range(1, 10) as $value) {
            DB::table('student')->insert([
                'name' => $faker->name(),
                // 'email' => $faker->email(),
                'email' => $faker->unique()->safeEmail(),
                'password' => Hash::make($faker->password()),
            ]);
        }
    }
}
