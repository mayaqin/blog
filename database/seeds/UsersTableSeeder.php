<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::statement('SET FOREIGN_KEY_CHECKS=0');
       DB::table('users')->truncate();

        $faker = Factory::create();

       DB::table('users')->insert([
           [
               'name'       =>  "john",
               'slug'       =>  "john",
               'email'      =>  "john@test.com",
               'password'   =>  bcrypt ('secret'),
               'bio'        =>  $faker->text(rand(250, 300))
           ],
           [
            'name'       =>  "edi",
            'slug'       =>  "edi",
            'email'      =>  "edy@test.com",
            'password'   =>  bcrypt ('secret'),
            'bio'       =>  $faker->text(rand(250, 300))
           ],
           [
            'name'       =>  "kennedy",
            'slug'       =>  "kennedy",
            'email'      =>  "kennedy@test.com",
            'password'   =>  bcrypt ('secret'),
            'bio'       =>  $faker->text(rand(250, 300))
           ]
       ]);
    }
}
