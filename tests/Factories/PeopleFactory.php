<?php

namespace Sfneal\Builders\Tests\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Sfneal\Builders\Tests\Models\People;

class PeopleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = People::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'person_id' => $this->faker->uuid,
            'name_first' => $this->faker->firstName,
            'name_last' => $this->faker->lastName,
            'email' => $this->faker->safeEmail,
            'age' => $this->faker->numberBetween(21, 70),
            'address' => $this->faker->streetAddress,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'zip' => $this->faker->postcode,
        ];
    }
}