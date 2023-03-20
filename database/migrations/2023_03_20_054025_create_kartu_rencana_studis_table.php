<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kartu_rencana_studi', function (Blueprint $table) {
            $table->id();
            $table->string('mataKuliah', 50);
            $table->integer('semester');
            $table->integer('sks');
            $table->integer('jam');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('kartu_rencana_studi');
    }
};
