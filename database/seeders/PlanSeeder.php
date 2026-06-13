<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::query()->create([
            'name' => 'Basic Plan',
            'price' => 9.99,
            'duration' => 30,
            'description' => 'A basic plan with limited features.',
            'is_active' => true,
        ]);

        Plan::query()->create([
            'name' => 'Premium Plan',
            'price' => 19.99,
            'duration' => 90,
            'description' => 'A premium plan with all features.',
            'is_active' => true,
        ]);

        Plan::query()->create([
            'name' => 'vip Plan',
            'price' => 50,
            'duration' => 180,
            'description' => 'A vip plan with exclusive features.',
            'is_active' => true,
        ]);
    }
}
