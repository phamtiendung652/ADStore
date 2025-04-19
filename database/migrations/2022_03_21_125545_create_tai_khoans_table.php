<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaiKhoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tai_khoans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('loai_tai_khoan_id');
            $table->foreignId('bac_tai_khoan_id');
            $table->string('username')->unique();
            $table->integer('diem_thuong');
            $table->string('password');
            $table->string('token');
            $table->integer('trang_thai');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('loai_tai_khoan_id')->references('id')->on('loai_tai_khoans');
            $table->foreign('bac_tai_khoan_id')->references('id')->on('bac_tai_khoans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tai_khoans');
    }
}
