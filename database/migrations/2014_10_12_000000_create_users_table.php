<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("name",200);
            $table->string("email",200);
            $table->string("password",200);
            $table->string("photo",200)->nullable();
            $table->string("address",200)->nullable();
            $table->string("phone",200)->nullable();
            $table->timestamps();
            return back()->with("message","User Registation Successfully!");


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
