<?php

namespace Database\Seeders;

use App\Models\Wife;
use App\Models\Husband;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HusbandWifeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 50 husband using the factory

        $husband = Husband::factory()->count(50)->create();

        // For each husband create a wife

        $husband->each(function ($husband) {
            Wife::factory()->create(['husband_id' => $husband->id]);
        });

    }
}
