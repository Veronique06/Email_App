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
        Schema::create('packs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('color')->default("primary");
            $table->bigInteger('nombre_contact')->default(10);
            $table->bigInteger('nombre_multi_user')->nullable();
            $table->bigInteger('nombre_email')->default(50);
            $table->bigInteger('price');
            $table->bigInteger('price_promo')->nullable();
            $table->bigInteger('nombre_jours');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packs');
    }
};
