<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTravelpackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('travelpackages', function (Blueprint $table) {
            $table->string("name");
            $table->string("surname");
            $table->date("birth_date");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('travelpackages', function (Blueprint $table) {
            $table->dropColumn(["name", "surname", "birth_date"]);
        });
    }
}
