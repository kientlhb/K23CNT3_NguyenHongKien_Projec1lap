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
        Schema::create('NHK_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('nhkMaSanPham',255);
            $table->string('nhkTenSanPham',255);
            $table->string('nhkHinhAnh',255);
            $table->integer('nhkSoLuong');
            $table->float('nhkDonGia');
            $table->bigInteger('nhkMaLoai')->references('id')->on('NHK_LOAI_SAN_PHAM');
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
        Schema::dropIfExists('NHK_SAN_PHAM');
    }
};
