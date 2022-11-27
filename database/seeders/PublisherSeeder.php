<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Publisher')->insert([
            [
                'name' => 'Gramedia',
                'address' => 'Jakarta',
                'phone' => '0217363729',
                'email' => 'Gramedia@gmail.com',
                'image' => 'https://octacintabuku.files.wordpress.com/2013/02/logo-gm.jpg',
            ],
            [
                'name' => 'Pastel Books',
                'address' => 'Bandung',
                'phone' => '0867582791',
                'email' => 'Pastelbooks@gmail.com',
                'image' => 'https://mizanstore.com/assets/img/vendor/Logo-PASTEL-BOOK-111.jpg',
            ]
            ]);
    }
}
