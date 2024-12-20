<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NHK_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->string('nhkMaHoaDon',255)->unique();
            $table->bigInteger('nhkMaKhachHang')->references('id')->on('nhk_khach_hang');
            $table->dateTime('nhkNgayHoaDon');
            $table->dateTime('nhkNgayNhan');
            $table->string('nhkHoTenKhachHang',255);
            $table->string('nhkEmail',255);
            $table->string('nhkDienThoai',255);
            $table->string('nhkDiaChi',255);
            $table->float('nhkTongTriGia');
            $table->tinyInteger('nhkTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NHK_HOA_DON');
    }
};
