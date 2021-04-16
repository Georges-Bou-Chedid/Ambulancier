<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppeletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appelets', function (Blueprint $table) {
            $table->id();
            $table->integer('1st')->nullable();
            $table->integer('2nd')->nullable();
            $table->integer('3rd')->nullable();
            $table->integer('4th')->nullable();
            $table->integer('1stadv')->nullable();
            $table->integer('2ndadv')->nullable();
            $table->integer('1stmission')->nullable();
            $table->integer('2stmission')->nullable();
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
        Schema::dropIfExists('appelets');
    }
}
