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
        Schema::create('device_records', function (Blueprint $table) {
            $table->string('id', 20)->primary();
            $table->string('device_id', 20);
            $table->decimal('temp', 5, 2);
            $table->decimal('hum', 5, 2);
            $table->dateTime('measurement_time');

            $table->foreign('device_id')->references('id')->on('devices')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_records');
    }
};
