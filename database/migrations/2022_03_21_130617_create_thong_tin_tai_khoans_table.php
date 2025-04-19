<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongTinTaiKhoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thong_tin_tai_khoans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tai_khoan_id');
            $table->string('ho_ten');
            $table->string('dia_chi')->nullable();
            $table->string('so_dien_thoai')->nullable();
            $table->string('email')->nullable();
            $table->date('ngay_sinh');
            $table->integer('gioi_tinh');
            $table->timestamps();
            $table->foreign('tai_khoan_id')->references('id')->on('tai_khoans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thong_tin_tai_khoans');
    }
}
