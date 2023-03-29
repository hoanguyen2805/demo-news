<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->comment('Title of the news');
            $table->string('image', 255)->nullable();
            $table->text('body')->comment('Main text of the news');
            $table->unsignedBigInteger('author_id')->nullable()->comment('Foreign key referencing the Users table');
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('category_id')->comment('Foreign key referencing the Categories table');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('hashtag', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->dateTime('publish_date')->nullable();
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
};
