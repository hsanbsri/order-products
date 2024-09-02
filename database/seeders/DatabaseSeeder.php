<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Create Products
        $product1 = Product::create(['name' => 'Product 1', 'price' => 100.00]);
        $product2 = Product::create(['name' => 'Product 2', 'price' => 200.00]);

        // Create Orders and Attach Products
        $order1 = Order::create(['order_number' => 'ORDER001']);
        $order1->products()->attach([$product1->id, $product2->id]);

        $order2 = Order::create(['order_number' => 'ORDER002']);
        $order2->products()->attach([$product1->id]);
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
