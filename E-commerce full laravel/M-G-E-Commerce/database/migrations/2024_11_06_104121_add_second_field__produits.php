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
        Schema::table('Produits', function (Blueprint $table) {
            //
            $table->foreignId('id_categories')->constrained()->onDelete('cascade');
            $table->foreignId('id_brands')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Produits', function (Blueprint $table) {
            //
            $table->dropColumn(['id_categories','id_brands']);
        });
    }
};
