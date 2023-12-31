<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('article_category', function (Blueprint $table) {
            $table->id("article_id");
//            $table->unsignedBigInteger("article_id");
//            $table->foreign('article_id')->references("id")->on("articles")->onDelete("cascade")->onUpdate("cascade");

            $table->foreignId("article_id")->references("id")->on("articles")->onDelete("cascade")->onUpdate("cascade");

            $table->id("category_id");
//            $table->unsignedBigInteger("category_id");
//            $table->foreign('category_id')->references("id")->on("categories")->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("category_id")->references("id")->on("categories")->onDelete("cascade")->onUpdate("cascade");

            $table->unique(['article_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_category');
    }
};
