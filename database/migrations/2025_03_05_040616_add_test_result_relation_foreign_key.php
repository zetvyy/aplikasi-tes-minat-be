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
        Schema::table('test_results', function (Blueprint $table) {
            // 1. Add the column first
            $table->foreignId('tes_minat_instrumen_id')->nullable()->constrained('tes_minat_instrumens')->cascadeOnDelete();

            // 2. Add the option_id column
            $table->foreignId('option_id')->nullable()->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('test_results', function (Blueprint $table) {
            $table->dropForeign(['tes_minat_instrumen_id']);
            $table->dropForeign(['option_id']);
            $table->dropColumn('tes_minat_instrumen_id');
            $table->dropColumn('option_id');
        });
    }
};
