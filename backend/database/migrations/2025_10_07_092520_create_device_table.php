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
        Schema::create('devices', function (Blueprint $table) {
            $table->string('id', 20)->primary();
            $table->string('name', 100);
            $table->decimal('temp_act', 5, 2)->nullable();
            $table->decimal('temp_min', 5, 2)->nullable();
            $table->decimal('temp_max', 5, 2)->nullable();
            $table->decimal('temp_avg', 5, 2)->nullable();
            $table->decimal('hum_act', 5, 2)->nullable();
            $table->decimal('hum_min', 5, 2)->nullable();
            $table->decimal('hum_max', 5, 2)->nullable();
            $table->decimal('hum_avg', 5, 2)->nullable();
            $table->dateTime('last_measurement')->nullable();
            $table->string('ip_address', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
