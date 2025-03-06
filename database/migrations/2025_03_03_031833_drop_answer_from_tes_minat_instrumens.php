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
        Schema::table('tes_minat_instrumens', function (Blueprint $table) {
            $table->dropColumn('answer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tes_minat_instrumens', function (Blueprint $table) {
            $table->string('answer', 255)->nullable();
        });
    }
};
