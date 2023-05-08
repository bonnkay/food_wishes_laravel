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
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_restaurant');
            $table->string('name', 100);
            $table->float('price');
            $table->string('category', 100);
            $table->string('description', 400);
            $table->string('image', 200);
            $table->string('state', 30);
            $table->timestamps();
            //relacion
            $table->foreign('id_restaurant')->references('id')->on('restaurants');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes');
    }
};