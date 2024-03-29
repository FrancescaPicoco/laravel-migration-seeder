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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("company");
            $table->string("departure");
            $table->string("arrivals");
            $table->time("departure_time");
            $table->time("arrivals_time");
            $table->char("train_code");
            $table->char("carriages_number");
            $table->boolean("in_time");
            $table->boolean("deleted");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
