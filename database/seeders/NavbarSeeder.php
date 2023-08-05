<?php

namespace Database\Seeders;

use App\Models\Navbar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'name' => 'Home',
                'route' => 'home',
                'ordering' => '1',
            ],
            [
                'name' => 'About Us',
                'route' => 'about',
                'ordering' => '2',
            ],
            [
                'name' => 'Products',
                'route' => 'product',
                'ordering' => '3',
            ],
            [
                'name' => 'News',
                'route' => 'news',
                'ordering' => '4',
            ],
            [
                'name' => 'Contact Us',
                'route' => 'contact',
                'ordering' => '5',
            ],
        ];

        foreach ($data as $item) {
            Navbar::create($item);
        }
    }
}
