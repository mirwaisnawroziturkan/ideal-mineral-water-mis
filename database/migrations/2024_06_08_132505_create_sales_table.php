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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('free_bottle');
            $table->integer('full_bottle');
            $table->integer('sale_bottle');
            $table->integer('quantity');
            $table->float('bottle_price');
            $table->float('total_price');
            $table->float('remain_amount');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
