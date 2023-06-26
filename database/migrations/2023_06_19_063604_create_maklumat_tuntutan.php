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
        Schema::create('maklumat_tuntutan', function (Blueprint $table) {
            $table->id('id_tuntutan');
            $table->string('id_pekerja');
            $table->date('tarikh');
            $table->string('hari');
            $table->string('bulan_tuntutan');
            $table->string('masa_mula_bekerja');
            $table->string('masa_akhir_bekerja');
            $table->string('jenis_hari');
            $table->string('jenis_waktu_bekerja');
            $table->integer('jumlah_jam_bekerja');
          
            $table->string('catatan');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maklumat_tuntutan');
    }
};
