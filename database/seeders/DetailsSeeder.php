<?php

namespace Database\Seeders;
use App\Models\Detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 1 ; $i <= 50 ; $i++){
            Detail::create([
                'book_id'=>rand(1,30),
                'category_id'=>rand(1, 4)
            ]);
        }
    }
}
