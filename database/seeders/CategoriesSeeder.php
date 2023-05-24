<?php


namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Category::create([
            'category_name'=>'Romance'
        ]);

        Category::create([
                'category_name'=>'Comedy'
        ]);

        Category::create([
                'category_name'=>'Crime'
        ]);

        Category::create([
            'category_name'=>'Non-fiction'
        ]);
    }
}
