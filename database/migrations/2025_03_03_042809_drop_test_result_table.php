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
        Schema::dropIfExists('test_minat_results');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('test_results', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tes_minat_instrumen_id');
            $table->unsignedBigInteger('selected_option_id')->nullable(); // Ditambahkan nullable

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('tes_minat_instrumen_id')->references('id')->on('tes_minat_instrumens')->onDelete('cascade');
            $table->foreign('selected_option_id')->references('id')->on('options')->onDelete('set null');
        });
    }
};
