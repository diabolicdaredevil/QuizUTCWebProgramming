<?php

namespace Database\Seeders;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = faker::create('id_ID');

        for($i = 1 ; $i <= 30 ; $i++){
            Book::create([
                'title' =>$faker->sentence($nbWords = 4),
                'author' => $faker->name(),
                'publisher_id' => rand(1, 6),
                'year'=>$faker->date($format='Y', $max='now'),
                'image'=>'https://edit.org/photos/img/blog/t9i-edit-book-covers-online.jpg-840.jpg',
                'synopsis'=>$faker->sentence($nbWords = 30)
            ]);
        }
    }
}
