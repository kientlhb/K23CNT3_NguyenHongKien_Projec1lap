<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NHK_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("NHK_SAN_PHAM")->insert([
            'nhkMaSanPham'  => "VP001",
            'nhkTenSanPham' => "cây phú quý",
            'nhkHinhAnh'    => "images/san-pham/VP001.jpg",
            'nhkSoLuong'    => 100,
            'nhkDonGia'     => 699000,
            'nhkMaLoai'     => 1,
            'nhkTrangThai'  => 0
        ]);
        
        DB::table("NHK_SAN_PHAM")->insert([
            'nhkMaSanPham'  => "VP002",
            'nhkTenSanPham' => "cây đại phú gia",
            'nhkHinhAnh'    => "images/san-pham/VP002.jpg",
            'nhkSoLuong'    => 200,
            'nhkDonGia'     => 550000,
            'nhkMaLoai'     => 1,
            'nhkTrangThai'  => 0
        ]);
        
        DB::table("NHK_SAN_PHAM")->insert([
            'nhkMaSanPham'  => "VP003",
            'nhkTenSanPham' => "cây hạnh phúc",
            'nhkHinhAnh'    => "images/san-pham/VP003.jpg",
            'nhkSoLuong'    => 150,
            'nhkDonGia'     => 250000,
            'nhkMaLoai'     => 1,
            'nhkTrangThai'  => 0
        ]);
        
        DB::table("NHK_SAN_PHAM")->insert([
            'nhkMaSanPham'  => "VP004",
            'nhkTenSanPham' => "cây vạn lộc",
            'nhkHinhAnh'    => "images/san-pham/VP004.jpg",
            'nhkSoLuong'    => 300,
            'nhkDonGia'     => 799000,
            'nhkMaLoai'     => 1,
            'nhkTrangThai'  => 0
        ]);
        
        DB::table("NHK_SAN_PHAM")->insert([
            'nhkMaSanPham'  => "PT001",
            'nhkTenSanPham' => "cây thiết mộc lan",
            'nhkHinhAnh'    => "images/san-pham/PT001.jpg",
            'nhkSoLuong'    => 150,
            'nhkDonGia'     => 590000,
            'nhkMaLoai'     => 1,
            'nhkTrangThai'  => 0
        ]);
        
        DB::table("NHK_SAN_PHAM")->insert([
            'nhkMaSanPham'  => "PT002",
            'nhkTenSanPham' => "cây trường sinh",
            'nhkHinhAnh'    => "images/san-pham/PT002.jpg",
            'nhkSoLuong'    => 100,
            'nhkDonGia'     => 150000,
            'nhkMaLoai'     => 3,
            'nhkTrangThai'  => 0
        ]);
        
        DB::table("NHK_SAN_PHAM")->insert([
            'nhkMaSanPham'  => "PT003",
            'nhkTenSanPham' => "cây Hạnh phúc",
            'nhkHinhAnh'    => "images/san-pham/PT003.jpg",
            'nhkSoLuong'    => 200,
            'nhkDonGia'     => 299000,
            'nhkMaLoai'     => 3,
            'nhkTrangThai'  => 0
        ]);
        
        DB::table("NHK_SAN_PHAM")->insert([
            'nhkMaSanPham'  => "PT004",
            'nhkTenSanPham' => "cây hoa nhài(lài ta)",
            'nhkHinhAnh'    => "images/san-pham/PT004.jpg",
            'nhkSoLuong'    => 300,
            'nhkDonGia'     => 199000,
            'nhkMaLoai'     => 3,
            'nhkTrangThai'  => 0
        ]);
    }
}
