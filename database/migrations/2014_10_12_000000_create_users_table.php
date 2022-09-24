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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('usertype')->default('user');
            $table->string('prefix');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('gender');
            $table->date('birthday');
            $table->integer('age');
            $table->string('card_id');
            $table->string('bloodtype');
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
            $table->softDeletes();
            // $table->rememberToken();
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
};
