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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Order::class)->constrained()->onDelete('cascade'); 
            $table->foreignIdFor(\App\Models\ProductVariant::class)->constrained()->onDelete('cascade'); 
            $table->integer('quantity');
            $table->decimal('listed_price', 10, 2)->nullable(); 
            $table->decimal('sale_price', 10, 2)->nullable();   
            $table->decimal('import_price', 10, 2)->nullable();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
