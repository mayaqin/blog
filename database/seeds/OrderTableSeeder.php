<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('orders')->insert([
           [
               'user_id'    =>  "1",
               'item_id'    =>  "1"
           ],
           [
            'user_id'    =>  "1",
            'item_id'    =>  "2"
           ],
           [
            'user_id'    =>  "2",
            'item_id'    =>  "2"
            ]
       ]);
    }
}
