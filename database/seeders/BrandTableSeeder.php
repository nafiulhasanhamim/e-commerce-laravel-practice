<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('brand')->insert([
            [
                'name' => 'Nike',
                'url' => 'img/nike.png'
            ],
            [
                'name' => 'Air Jordan',
                'url' => 'img/jordan.png'
            ],
            [
                'name' => 'Adidas',
                'url' => 'img/adidas.png'
            ],
            [
                'name' => 'Sketchers',
                'url' => 'img/sketchers.png'
            ],
            [
                'name' => 'Vans',
                'url' => 'img/vans.svg'
            ],
            [
                'name' => 'Moonstar',
                'url' => 'img/moonstar.png'
            ],
            [
                'name' => 'Fila',
                'url' => 'img/fila.png'
            ],
            [
                'name' => 'Converse',
                'url' => 'img/convers.svg'
            ],
            [
                'name' => 'New Balance',
                'url' => 'img/newbalance.png'
            ],
            [
                'name' => 'Puma',
                'url' => 'img/puma.svg'
            ],
            [
                'name' => 'Reebok',
                'url' => 'img/reebok.png'
            ],
            [
                'name' => 'Asics',
                'url' => 'img/asics.png'
            ]
        ]);
    }
}
