<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
           'title' => 'Velit voluptate ullamco ut cillum nulla.',
           'price' => 100.00,
           'quantity' => 10,
           'category_id' => 1,
           'brand_id' => 1,
           'description' => 'Esse eiusmod aliquip in adipisicing consequat est cupidatat ad. Mollit sit nulla magna irure veniam proident adipisicing qui. Exercitation amet consectetur occaecat tempor non fugiat cillum ipsum velit fugiat in duis sunt. Consectetur nulla est ut elit anim sint irure amet anim aliquip.'
        ]);
    }
}
