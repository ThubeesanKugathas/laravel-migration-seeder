<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelpackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travelpackages', function (Blueprint $table) {
            $table->id();
            $table->string("address destination");
            $table->string("city destination");
            $table->string("country destination");
            $table->string("transport type");
            $table->string("transport company");
            $table->date("departure date");
            $table->date("arriving date");
            $table->boolean("insurance policy");
            $table->boolean("contract sign");
            $table->date("contract expiring");
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
        Schema::dropIfExists('travelpackages');
    }
}
