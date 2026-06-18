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
    Schema::create('reservasis', function (Blueprint $table) {

        $table->id();

        $table->string('nama');
        $table->string('telepon');

        $table->integer('nomor_meja');

        $table->date('tanggal');
        $table->time('jam');

        $table->integer('jumlah_orang');

        $table->text('catatan')->nullable();

        $table->string('status')
              ->default('Menunggu');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasis');
    }
};
