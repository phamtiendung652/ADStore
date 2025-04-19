<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;

class SanPhamController extends Controller
{
    public function index()
    {
    $sanPhams = SanPham::all();
    return view('sanphams.index', compact('sanPhams'));
    }

    public function show($id)
    {
    $sanPham = SanPham::find($id);
    return view('sanphams.show', compact('sanPham'));
    }
}
