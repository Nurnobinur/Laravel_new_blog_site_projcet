<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreignId("categories_id")->references("id")->on("users")->onDelete("cascade");
            $table->string("title",200);
            $table->string("slug")->nullable();
            $table->string("img")->nullable();
            $table->string("description");
            $table->dateTime("date");
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
        Schema::dropIfExists('posts');
    }
}
