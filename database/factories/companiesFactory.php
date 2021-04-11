<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Companies;
use Illuminate\Database\Eloquent\Factories\Factory;

class companiesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Companies::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'telephone' => $this->faker->tollFreePhoneNumber,
            'address' => $this->faker->streetAddress,
            'postalcode' => $this->faker->postcode,
            'city' => $this->faker->city,
            'country' => $this->faker->state,
            'descript' => $this->faker->text($maxNbChars = 50),
        ];
    }
}
