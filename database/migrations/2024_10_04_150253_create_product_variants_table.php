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
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Product::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(\App\Models\Chip::class)->constrained();
            $table->foreignIdFor(\App\Models\Ram::class)->constrained();
            $table->foreignIdFor(\App\Models\Storage::class)->constrained();
            $table->decimal('listed_price', 10, 2)->nullable(); // Đổi sang kiểu decimal
            $table->decimal('sale_price', 10, 2)->nullable();   // Đổi sang kiểu decimal
            $table->decimal('import_price', 10, 2)->nullable(); // Đổi sang kiểu decimal
            $table->integer('quantity')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
