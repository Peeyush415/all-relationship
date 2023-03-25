<?php

namespace Database\Factories;
use App\Models\Husband;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Husband>
 */
class HusbandFactory extends Factory
{

    protected $model=Husband::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        return [
            'name' => $this->faker->name()
        ];
    }
}
