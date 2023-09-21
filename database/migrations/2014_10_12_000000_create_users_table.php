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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('telephone')->nullable();
            $table->string('ifu_society')->nullable();
            $table->string('photo')->nullable();
            $table->string('country')->nullable();
            $table->text('adresse')->nullable();
            $table->date('birthday')->nullable();
            $table->string('name_society')->nullable();
            $table->boolean('actif')->default(1);
            $table->boolean('profil')->default(0);
            $table->string('type_account')->default('user');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
