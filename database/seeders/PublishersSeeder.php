<?php

namespace Database\Seeders;
use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PublishersSeeder extends Seeder
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

        Publisher::create([
            'publisher_name'=>'Gramedia Pustaka Utama',
            'address'=>$faker->address(),
            'email'=>$faker->email(),
            'phone'=>$faker->phoneNumber()
        ]);

        Publisher::create([
            'publisher_name'=>'Penguin UK',
            'address'=>$faker->address(),
            'email'=>$faker->email(),
            'phone'=>$faker->phoneNumber()
        ]);

        Publisher::create([
            'publisher_name'=>'Buku Utama',
            'address'=>$faker->address(),
            'email'=>$faker->email(),
            'phone'=>$faker->phoneNumber()
        ]);

        Publisher::create([
            'publisher_name'=>'Jaya Abadi',
            'address'=>$faker->address(),
            'email'=>$faker->email(),
            'phone'=>$faker->phoneNumber()
        ]);

        Publisher::create([
            'publisher_name'=>'Bukuqu',
            'address'=>$faker->address(),
            'email'=>$faker->email(),
            'phone'=>$faker->phoneNumber()
        ]);

        Publisher::create([
            'publisher_name'=>'Bukune',
            'address'=>$faker->address(),
            'email'=>$faker->email(),
            'phone'=>$faker->phoneNumber()
        ]);
    }
}
