<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $table = 'sanpham';
    public $timestamps = false;
    protected $fillable = ['ten_san_pham', 'nha_san_xuat', 'gia', 'hinh_anh'];
    public function chiTietSanPham()
    {
        return $this->hasOne(ChiTietSanPham::class, 'san_pham_id');
    }
}
