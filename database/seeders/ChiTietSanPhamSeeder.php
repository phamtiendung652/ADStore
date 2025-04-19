<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chi_tiet_san_phams')->insert([
            [
                'ram' => '16GB DDR5 4800MHz',
                'o_cung' => '512GB PCIe NVMe SSD',
                'chip_do_hoa' => 'Intel Iris Xe Graphics',
                'cpu' => 'Intel Core i7-1255U (1.70GHz up to 4.70GHz, 12MB Cache)',
                'pin' => '58Whr',
                'man_hinh' => '16 inch WUXGA (1920 x 1200)',
                'ket_noi_khong_day' => 'Wi-Fi 6, Bluetooth 5.1',
                'camera' => 'FHD Webcam',
                'he_dieu_hanh' => 'Windows 11 Home',
                'khoi_luong' => '1.7',
                'mau_sac' => 'Steel Gray',
                'mo_ta' => 'Laptop văn phòng màn hình 16 inch mỏng nhẹ, CPU Intel Core i7 Gen 12, RAM 16GB, SSD 512GB.',
                'san_pham_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ram' => '8GB Unified Memory (16GB, 24GB)',
                'o_cung' => '256GB SSD (512GB, 1TB, 2TB)',
                'chip_do_hoa' => 'GPU 8 lõi',
                'cpu' => 'Apple M3 8 lõi CPU',
                'pin' => '52.6Wh Lithium-Polymer',
                'man_hinh' => '13.6 inch Liquid Retina (2560 x 1664)',
                'ket_noi_khong_day' => 'Wi-Fi 6E (802.11ax), Bluetooth 5.3',
                'camera' => '1080p FaceTime HD',
                'he_dieu_hanh' => 'macOS',
                'khoi_luong' => '1.24',
                'mau_sac' => 'Midnight, Starlight, Space Gray, Silver',
                'mo_ta' => 'MacBook Air 13.6 inch với chip M3 mạnh mẽ, thiết kế mỏng nhẹ, màn hình Liquid Retina sắc nét.',
                'san_pham_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ram' => '16GB DDR5 4800MHz',
                'o_cung' => '512GB PCIe NVMe SSD',
                'chip_do_hoa' => 'Intel Iris Xe Graphics',
                'cpu' => 'Intel Core i7-1255U (1.70GHz up to 4.70GHz, 12MB Cache)',
                'pin' => '58Whr',
                'man_hinh' => '16 inch WUXGA (1920 x 1200)',
                'ket_noi_khong_day' => 'Wi-Fi 6, Bluetooth 5.1',
                'camera' => 'FHD Webcam',
                'he_dieu_hanh' => 'Windows 11 Home',
                'khoi_luong' => '1.7',
                'mau_sac' => 'Steel Gray',
                'mo_ta' => 'Laptop văn phòng màn hình 16 inch mỏng nhẹ, CPU Intel Core i7 Gen 12, RAM 16GB, SSD 512GB.',
                'san_pham_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ram' => '16GB DDR4 3200MHz',
                'o_cung' => '512GB PCIe NVMe SSD',
                'chip_do_hoa' => 'Intel UHD Graphics',
                'cpu' => 'Intel Core i5-1235U (up to 4.40GHz)',
                'pin' => '3-cell 41Wh',
                'man_hinh' => '14 inch FHD (1920 x 1080) IPS',
                'ket_noi_khong_day' => 'Wi-Fi 6, Bluetooth 5.3',
                'camera' => 'HP Camera',
                'he_dieu_hanh' => 'Windows 11 Home',
                'khoi_luong' => '1.47',
                'mau_sac' => 'Asteroid Silver',
                'mo_ta' => 'Laptop HP 240 G9 với CPU Intel Core i5 thế hệ 12, RAM 16GB, SSD 512GB, màn hình 14 inch FHD.',
                'san_pham_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ram' => '16GB DDR5 5600MHz',
                'o_cung' => '512GB PCIe NVMe SSD',
                'chip_do_hoa' => 'Intel Arc Graphics',
                'cpu' => 'Intel Core Ultra 7-155U',
                'pin' => '3-cell 54Wh',
                'man_hinh' => '14 inch FHD (1920 x 1080) IPS',
                'ket_noi_khong_day' => 'Wi-Fi 6E, Bluetooth 5.3',
                'camera' => 'FHD Camera',
                'he_dieu_hanh' => 'Windows 11 Home',
                'khoi_luong' => '1.4',
                'mau_sac' => 'Xám',
                'mo_ta' => 'Laptop Dell Latitude 5450, Intel Core Ultra 7, RAM 16GB, SSD 512GB, màn hình 14 inch FHD.',
                'san_pham_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
