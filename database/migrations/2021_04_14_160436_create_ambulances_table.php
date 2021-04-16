<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbulancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambulances', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('ambname')->nullable();
            $table->string('rebhan')->nullable();
            $table->integer('KM')->nullable();
            $table->string('problem')->nullable();
            $table->string('status')->nullable();
            $table->string('Description')->nullable();
            $table->date('duedate')->nullable();
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
        Schema::dropIfExists('ambulances');
    }
}
