<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'slug' => $this->faker->slug(),
            'url' => "https://loremflickr.com/320/240?random=". rand(1,99),
            'thumbnail' => "https://loremflickr.com/320/240?random=". rand(1,99),
            'description' => $this->faker->sentence(),
            'length' => $this->faker->numberBetween()
         ];
    }
}
