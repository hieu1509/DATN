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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->enum('status', ['pending', 'completed', 'canceled', 'refunded'])->default('pending'); 
            $table->enum('payment_type', ['credit_card', 'paypal', 'bank_transfer'])->nullable(); 
            $table->enum('payment_status', ['paid', 'unpaid', 'refunded'])->nullable(); 
            $table->decimal('total_price', 10, 2)->nullable(); 
            $table->foreignIdFor(\App\Models\User::class)->constrained()->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
