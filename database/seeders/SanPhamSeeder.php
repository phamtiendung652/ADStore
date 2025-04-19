<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('san_phams')->insert([
            [
                'ten_san_pham' => 'Laptop ACER Aspire Lite 16 AL16-51P-72S2',
                'nha_san_xuat' => 'ACER',
                'gia' => 15990000,
                'hinh_anh' => 'Laptop ACER Aspire Lite 16 AL16-51P-72S2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ten_san_pham' => 'Apple MacBook Air M3 13.6',
                'nha_san_xuat' => 'Apple',
                'gia' => 30690000,
                'hinh_anh' => 'Apple MacBook Air M3 13.6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ten_san_pham' => 'Laptop ASUS ExpertBook P1 P1503CVA-I7SE16-63WS',
                'nha_san_xuat' => 'ASUS',
                'gia' => 20560000,
                'hinh_anh' => 'Laptop ASUS ExpertBook P1 P1503CVA-I7SE16-63WS.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ten_san_pham' => 'Laptop HP 240 G9 (AG2J7AT)',
                'nha_san_xuat' => 'HP',
                'gia' => 15690000,
                'hinh_anh' => 'Laptop HP 240 G9 (AG2J7AT).jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ten_san_pham' => 'Laptop Dell Latitude 5450',
                'nha_san_xuat' => 'DELL',
                'gia' => 26490000,
                'hinh_anh' => 'Laptop Dell Latitude 5450.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
