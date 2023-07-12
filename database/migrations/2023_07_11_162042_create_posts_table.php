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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('seo_keywords')->nullable();
            $table->string('seo_description')->nullable();
            $table->Text('description')->nullable();
            $table->string('image_thumbnail')->nullable();
            $table->string('image_cover')->nullable();
            $table->boolean('is_published')->default(1);
            $table->foreignId('created_by_id')->constrained('users');
            $table->foreignId('category_id')->constrained('categories');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
