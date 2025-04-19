<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chi_tiet_san_phams', function (Blueprint $table) {
            $table->id();
            $table->string('ram')->nullable();
            $table->string('o_cung')->nullable();
            $table->string('chip_do_hoa')->nullable();
            $table->string('cpu')->nullable();
            $table->string('pin')->nullable();
            $table->string('man_hinh')->nullable();
            $table->string('ket_noi_khong_day')->nullable();
            $table->string('camera')->nullable();
            $table->string('he_dieu_hanh')->nullable();
            $table->string('khoi_luong')->nullable();
            $table->string('mau_sac')->nullable();
            $table->text('mo_ta')->nullable();
            $table->foreignId('san_pham_id');
            $table->foreign('san_pham_id')->references('id')->on('san_phams');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_san_phams');
    }
};
