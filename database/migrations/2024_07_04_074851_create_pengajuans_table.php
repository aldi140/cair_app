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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('no_hp');
            $table->char('provinsi_id', 2)->nullable();
            $table->char('kota_id', 4)->nullable();
            $table->char('kecamatan_id', 7)->nullable();
            $table->char('kelurahan_id', 10)->nullable();
            $table->string('tipe_jaminan');
            $table->unsignedBigInteger('merk_motor_id')->nullable();
            $table->unsignedBigInteger('merk_mobil_id')->nullable();
            $table->unsignedBigInteger('mobil_id')->nullable();
            $table->unsignedBigInteger('motor_id')->nullable();
            $table->string('property')->nullable();
            $table->string('sertifikat')->nullable();
            $table->string('alamat_property', 1000)->nullable();
            $table->string('tahun')->nullable();
            $table->bigInteger('nominal_pinjaman', );


            $table->foreign('provinsi_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->foreign('kota_id')->references('id')->on('regencies')->onDelete('cascade');
            $table->foreign('kecamatan_id')->references('id')->on('districts')->onDelete('cascade');
            $table->foreign('kelurahan_id')->references('id')->on('villages')->onDelete('cascade');
            $table->foreign('merk_motor_id')->references('id')->on('merk_motors')->onDelete('cascade');
            $table->foreign('merk_mobil_id')->references('id')->on('merk_mobils')->onDelete('cascade');
            $table->foreign('mobil_id')->references('id')->on('mobils')->onDelete('cascade');
            $table->foreign('motor_id')->references('id')->on('motors')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
