<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NHK_QUAN_TRITableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $nhkMatKhau = md5("123456@"); // Giữ tên biến là $nhkMaKhau

    DB::table('NHK_QUAN_TRI')->insert([
        'nhkTaiKhoan' => "kientlhb3@gmail.com",
        'nhkMatKhau' => $nhkMatKhau, // Đảm bảo sử dụng đúng tên biến $nhkMaKhau
        'nhkTrangThai' => 0
    ]);

    DB::table('NHK_QUAN_TRI')->insert([
        'nhkTaiKhoan' => "0946892616",
        'nhkMatKhau' => $nhkMatKhau, // Đảm bảo sử dụng đúng tên biến $nhkMaKhau
        'nhkTrangThai' => 0
    ]);
}


}
