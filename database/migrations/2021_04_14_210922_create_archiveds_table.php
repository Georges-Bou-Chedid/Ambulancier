<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archiveds', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('ambname')->nullable();
            $table->string('rebhan')->nullable();
            $table->integer('KM')->nullable();
            $table->string('problem')->nullable();
            $table->string('status')->nullable();
            $table->string('Description')->nullable();
            $table->date('duedate')->nullable();
            $table->string('img')->nullable();
            $table->string('img2')->nullable();
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
        Schema::dropIfExists('archiveds');
    }
}
