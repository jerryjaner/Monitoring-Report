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
        Schema::create('voltage_and_amperes', function (Blueprint $table) {
            $table->id();
            $table->string('ckt_no')->nullable();
            $table->string('load_description');
            $table->string('breaker_rating_AT')->nullable();
            $table->string('breaker_rating_AF')->nullable();
            $table->string('breaker_rating_P')->nullable();
            $table->string('actual_ampere_L1')->nullable();
            $table->string('actual_ampere_L2')->nullable();
            $table->string('actual_ampere_L3')->nullable();
            $table->string('actual_voltage_L1_L2')->nullable();
            $table->string('actual_voltage_L2_L3')->nullable();
            $table->string('actual_voltage_L3_L1')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voltage_and_amperes');
    }
};
