<?php

namespace Database\Factories;
use App\Models\Book;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
   
    protected $model = Book::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3, true),
            'description' => $this->faker->sentence(6, true),
            'price' => $this->faker->numberBetween(5, 50),
            'author_id' => $this->faker->numberBetween(1, 50),
        ];
    }
}
