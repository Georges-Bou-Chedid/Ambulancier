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
            $table->string('first')->nullable();
            $table->string('second')->nullable();
            $table->string('third')->nullable();
            $table->string('fourth')->nullable();
            $table->string('five')->nullable();
            $table->string('six')->nullable();
            $table->string('seven')->nullable();
            $table->string('eight')->nullable();
            $table->string('firstadv')->nullable();
            $table->string('secondadv')->nullable();
            $table->string('firstmission')->nullable();
            $table->string('secondmission')->nullable();
            $table->string('IDselected')->nullable();
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
