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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->decimal('discount', 10, 2)->nullable(); 
            $table->enum('discount_type', ['percentage', 'fixed'])->nullable(); 
            $table->decimal('minimum_spend', 10, 2)->nullable(); 
            $table->date('start_date')->nullable(); 
            $table->date('end_date')->nullable(); 
            $table->integer('usage_limit')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
