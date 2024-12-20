<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NHK_LOAI_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('NHK_LOAI_SAN_PHAM')->insert([
            ['nhkMaLoai' => 'L001', 'nhkTenLoai' => 'Cây cảnh văn phòng', 'nhkTrangThai' => 0],
            ['nhkMaLoai' => 'L002', 'nhkTenLoai' => 'Cây để bàn', 'nhkTrangThai' => 0],
            ['nhkMaLoai' => 'L003', 'nhkTenLoai' => 'Cây phong thủy', 'nhkTrangThai' => 0],
            ['nhkMaLoai' => 'L004', 'nhkTenLoai' => 'Cây thủy phong', 'nhkTrangThai' => 0]
        ]);
    }
}