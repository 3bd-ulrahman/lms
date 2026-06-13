<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::query()->get();

        $plans = Plan::query()->get();

        Subscription::factory()->state([
            'user_id' => $users->random()->id,
            'plan_id' => $plans->random()->id,
        ])->count(50)->create();
    }
}
