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
            
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('slug');
            $table->string('description');
            $table->decimal('prix_regulier', 8,2);
            $table->decimal('prix_sale', 8,2);
            $table->string('SKU')->unique();
            $table->decimal('quantite_stock',8,2);
            $table->boolean('stock_disponibility')->default(false);
            $table->boolean('futured')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Produits', function (Blueprint $table) {
            //
            $table->dropColumn(['name','image','slug','description','prix_regulier','prix_sale','SKU','quantite_stock','stock_disponibility','futured']);
        });
    }
};
