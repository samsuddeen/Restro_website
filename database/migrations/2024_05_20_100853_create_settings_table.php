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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('heading_text')->nullable();
            $table->string('small_text')->nullable();
            $table->string('button_text')->nullable();
            $table->string('slideimage')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('logo')->nullable();
            $table->string('bglogo')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
