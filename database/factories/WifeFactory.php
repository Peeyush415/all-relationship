<?php

namespace Database\Factories;

use App\Models\Wife;
use App\Models\Husband;
use Fake\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wife>
 */
class WifeFactory extends Factory
{
    protected $model=Wife::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'husband_id' => function () {
                return Husband::factory()->create()->id;
            }
        ];
    }
}
