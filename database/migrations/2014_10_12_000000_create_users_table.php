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
            $table->string('name');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mobile');
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('password');
            $table->string('last_service_uses');
            $table->longText('about_me');
            $table->string('adress');
            $table->integer('id_region');
            $table->string('zip_code');
            $table->string('language');
            $table->timestamp('birth_day');
            $table->string('gender');
            $table->string('picture_profil');
            $table->string('picture_cover');
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
