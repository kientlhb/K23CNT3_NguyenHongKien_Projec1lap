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
        Schema::create('NHK_QUAN_TRI', function(blueprint $table){
            $table->id(); // Tạo cột 'id' tự tăng
            $table->string('nhkTaiKhoan', 255)->unique(); // Tạo cột 'nhkTaiKhoan' với độ dài tối đa 255 ký tự và đảm bảo tính duy nhất
            $table->string('nhkMatKhau', 255); // Tạo cột 'nhkMatKhau' với độ dài tối đa 255 ký tự
            $table->tinyInteger('nhkTrangThai'); // Tạo cột 'nhkTrangThai' kiểu tinyInteger (sử dụng cho trạng thái như 1, 0)
            $table->timestamps(); // Tạo cột 'created_at' và 'updated_at'
        });

    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NHK_QUAN_TRI');
    }
};
