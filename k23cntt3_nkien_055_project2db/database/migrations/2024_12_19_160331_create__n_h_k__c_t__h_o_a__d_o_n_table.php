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
        Schema::create('NHK_CT_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nhkHoaDonID')->references('id')->on('nhk_hoa_don');
            $table->bigInteger('nhkSanPhamID')->references('id')->on('nhk_san_pham');
            $table->integer('nhkSoLuongMua');
            $table->float('nhkDonGiaMua');
            $table->float('nhkThanhTien');
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
        Schema::dropIfExists('NHK_CT_HOA_DON');
    }
};
