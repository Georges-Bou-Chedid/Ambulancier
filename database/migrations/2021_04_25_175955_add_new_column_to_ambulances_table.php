<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnToAmbulancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ambulances', function (Blueprint $table) {
            if (!Schema::hasColumn('ambulances', 'approved')){
                $table->string('approved')->after('status');
              };
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ambulances', function (Blueprint $table) {
            $table->dropColumn(['approved']);
        });
    }
}
