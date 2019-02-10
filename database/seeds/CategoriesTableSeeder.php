<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        DB::table('categories')->insert([
            [
                'title' =>  'web design',
                'slug'  =>  'web-design'
            ],
            [
                'title' =>  'web programing',
                'slug'  =>  'web-programing'
            ],
            [
                'title' =>  'internet',
                'slug'  =>  'internet'
            ],
            [
                'title' =>  'social marketing',
                'slug'  =>  'social-marketing'
            ],
            [
                'title' =>  'photography',
                'slug'  =>  'photography'
            ]
        ]);

        for ($post_id = 1; $post_id<=10; $post_id++)
        {
            $category_id = rand(1, 5);

            DB::table('posts')
            ->where('id', $post_id)
            ->update(['category_id' => $category_id]);
        }
    }
}
