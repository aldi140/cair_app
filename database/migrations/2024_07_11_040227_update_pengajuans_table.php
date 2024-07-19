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
        Schema::table('pengajuans', function (Blueprint $table) {
            // Hapus kolom yang sudah tidak diperlukan
            $table->dropColumn('mobil_id');
            $table->dropColumn('motor_id');

            // Tambahkan kolom baru
            $table->string('nama_mobil')->nullable();
            $table->string('nama_motor')->nullable();

          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengajuans', function (Blueprint $table) {
            // Kembalikan perubahan jika perlu
            $table->unsignedBigInteger('mobil_id')->nullable();
            $table->unsignedBigInteger('motor_id')->nullable();

            $table->dropColumn('nama_mobil');
            $table->dropColumn('nama_motor');

            $table->dropForeign(['mobil_id']);
            $table->dropForeign(['motor_id']);
        });
    }
};
