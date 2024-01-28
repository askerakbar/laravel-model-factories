<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Database\Seeder;
use Database\Factories\OrderFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::factory(10)->create();
        $users = User::factory(10)->create();

        $users->each(function ($user) {
            $orders = Order::factory()->recycle($user)->count(rand(1, 3))->make();
            $user->orders()->saveMany($orders)->each(function ($order) {
                $orderItems = OrderItem::factory()->recycle($order)->count(rand(1, 10))->make();
                $order->items()->saveMany($orderItems);
            });
        });

    }
}
