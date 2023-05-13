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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id');
            $table->foreignId('user_id');
            $table->string('pin');
            $table->string('slug',255)->unique();
            $table->string('title',255)->unique();
            $table->text('video_link')->nullable();
            $table->text('thumbnail')->nullable();
            $table->text('excerpt')->nullable();
            $table->text('content')->nullable();
            $table->integer('counts')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
