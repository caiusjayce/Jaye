<?php

namespace Database\Factories;

use App\Models\MPLteams;
use Illuminate\Database\Eloquent\Factories\Factory;

class MPLteamsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MPLteams::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'yourName' => $this->faker->word,
        'Birthdate' => $this->faker->word,
        'Address' => $this->faker->word,
        'teamName' => $this->faker->word,
        'teamRole' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
