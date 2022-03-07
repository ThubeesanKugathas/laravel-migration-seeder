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
            $table->string("address_destination");
            $table->string("city_destination");
            $table->string("country_destination");
            $table->string("transport_type");
            $table->string("transport_company");
            $table->date("departure_date");
            $table->date("arriving_date");
            $table->boolean("insurance_policy");
            $table->boolean("contract_sign");
            $table->date("contract_expiring");
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
