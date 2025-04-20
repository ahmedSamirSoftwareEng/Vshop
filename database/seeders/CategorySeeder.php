<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Computer',
            'slug'=>'dell'
        ]);
        Category::create([
            'name' => 'Phone',
            'slug'=>'dell'
        ]);
        Category::create([
            'name' => 'Watch',
            'slug'=>'dell'
        ]);
    }
}
