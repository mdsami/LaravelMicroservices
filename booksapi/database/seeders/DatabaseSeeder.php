<?php

namespace Database\Seeders;
use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $numberOfBooks = 500;


         \App\Models\Book::factory($numberOfBooks)->create();

    }
}
