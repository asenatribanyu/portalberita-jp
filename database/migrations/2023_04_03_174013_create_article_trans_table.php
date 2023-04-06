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
        Schema::create('article_trans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_id');
            $table->string('locale');
            $table->string('title',255)->unique();
            $table->text('excerpt');
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_trans');
    }
};
