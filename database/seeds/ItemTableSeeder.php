<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
        [ 'item_name'   =>  "Indomie",
            'price'     =>  "2500"
        ],
        [ 'item_name'   =>  "pepsodent",
            'price'     =>  "5500"
        ]
        ]);
    }
}
