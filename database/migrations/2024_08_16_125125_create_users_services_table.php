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
        Schema::create('users_services', function (Blueprint $table) {
            $table->id();
            $table->integer('id_users');
            $table->string('type_user');
            $table->string('type_service');
            $table->string('title');
            $table->longText('description');
          
            $table->timestamp('end_date')->nullable();
            $table->longText('detail');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_services');
    }
};
