<?php

use App\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = ['meme', 'enviroment', 'sport', 'travel', 'holiday', 'politics', 'food', 'adventure'];
        for ($i=0; $i < count($categories); $i++) { 

            $newCategory = new Category();
            $newCategory->name = $categories[$i];
            $newCategory->color = $faker->unique()->hexColor();
            $newCategory->save();
        }
    }
}
