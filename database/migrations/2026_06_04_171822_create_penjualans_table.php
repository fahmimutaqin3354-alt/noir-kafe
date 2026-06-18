<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penjualans', function (Blueprint $table) {

            $table->id();

            $table->string('nama_pembeli');

            $table->string('nama_kopi');

            $table->integer('jumlah');

            $table->integer('harga');

            $table->integer('total');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};
