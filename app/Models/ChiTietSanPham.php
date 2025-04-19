<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietSanPham extends Model
{
    use HasFactory;
    protected $fillable = ['ram', 'o_cung', 'chip_do_hoa', 'cpu', 'pin', 'man_hinh', 'ket_noi_khong_day', 'camera', 'he_dieu_hanh', 'khoi_luong', 'mau_sac', 'mo_ta', 'san_pham_id'];
    public function sanPham()
    {
        return $this->belongsTo(SanPham::class, 'san_pham_id');
    }
}
