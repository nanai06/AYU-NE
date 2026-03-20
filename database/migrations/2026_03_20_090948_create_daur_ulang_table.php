<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('daur_ulang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('foto_kemasan');
            $table->string('qr_code');
            $table->integer('koin')->default(10);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('daur_ulang');
    }
};