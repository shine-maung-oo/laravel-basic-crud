<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories=[
            [
                'name' => 'Juice cup & Ice Cream Cup',
            ],
            [
                'name' => 'Lunch Box & Micro Wave Box',
            ],
            [
                'name' => 'Pipe',
            ],
            [
                'name' => 'Printing Cup',
            ],
            [
                'name' => 'Snack Box & Cake Box',
            ],
            [
                'name' => 'Other',
            ],
        ];

        foreach ($categories as $category) {
            Categories::create($category);
        }
    }
}
