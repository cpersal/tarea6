<?php
namespace Database\Factories;

use App\Models\Series;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeriesFactory extends Factory
{
    protected $model = Series::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'release_year' => $this->faker->numberBetween(1990, 2023),
            'episodes' => $this->faker->numberBetween(10, 300),
            'seasons' => $this->faker->numberBetween(1, 15),
            'average_rating' => $this->faker->randomFloat(1, 0, 10),
        ];
    }
}
