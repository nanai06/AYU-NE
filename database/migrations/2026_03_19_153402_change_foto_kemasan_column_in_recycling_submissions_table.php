<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('recycling_submissions', function (Blueprint $table) {
            $table->text('foto_kemasan')->change();
        });
    }

    public function down(): void
    {
        Schema::table('recycling_submissions', function (Blueprint $table) {
            $table->string('foto_kemasan')->change();
        });
    }
};