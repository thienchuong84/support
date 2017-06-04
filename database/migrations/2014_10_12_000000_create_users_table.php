<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');       // ->unsigned() : Set integer columns to UNSIGNED
            $table->string('name');
            $table->string('username')->unique();   // uniqid('user_')
            // $table->string('email')->unique();   // thay username cho đăng nhập
            $table->string('email')->nullable();
            $table->unsignedInteger('team_id')->nullable();
            $table->string('ext', 20)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('password')->nullable();
            $table->unsignedTinyInteger('level')->default(1);
            $table->unsignedTinyInteger('isActive')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
