<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
                'address' => 'No.143/61-64 Mya Wa Di Min Gyi Street, Thar Gyi Industrial Zone, South Dagon Township, Yangon, Myanmar',
                'email' => 'eaststarplasticcupfactory@gmail.com',
                'phone' => '09-420716344, 09-799577777, 09-456763777',
        ];
        Contact::create($data);
    }
}
