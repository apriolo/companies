<?php

namespace Database\Seeders;

use App\Models\Companies;
use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert([[
            'category' => 'Auto'
        ],[
            'category' => 'Beauty and Fitness'
        ],[
            'category' => 'Entertainment'
        ],[
            'category' => 'Health'
        ],[
            'category' => 'Sports'
        ],[
            'category' => 'Travel'
        ]]);

        $companies = Companies::factory()->count(20)->make();
        foreach ($companies as $c) {
            $c->save();
            $c->companies()->attach(rand(1,6));
        }

    }
}
