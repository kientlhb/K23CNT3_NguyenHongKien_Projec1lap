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
        Schema::create('NHK_LOAI_SAN_PHAM', function (Blueprint $table) {
              $table->id();
              $table->string('nhkMaLoai',255)->unique();
              $table->string('nhkTenLoai',255);
              $table->tinyInteger('nhkTrangThai');
              $table->tinestamps();
               });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NHK_LOAI_SAN_PHAM');
    }
};
