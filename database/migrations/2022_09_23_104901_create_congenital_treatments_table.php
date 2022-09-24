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
        Schema::create('congenital_treatments', function (Blueprint $table) {
            $table->unsignedBigInteger('treatment_recordID');
            $table->unsignedBigInteger('congenitalID');
            $table->foreign('treatment_recordID')->references('id')->on('treatment_records');
            $table->foreign('congenitalID')->references('id')->on('congenitals');
            // $table->id();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('congenital_treatments');
    }
};
