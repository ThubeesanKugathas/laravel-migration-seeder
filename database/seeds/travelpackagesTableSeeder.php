<?php

use Faker\Generator as Faker;
use App\TravelPackage;
use Illuminate\Database\Seeder;

class TravelPackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        for ($i=0; $i < 15; $i++) { 
            $travelpackage = new TravelPackage();

            $travelpackage->address_destination = $faker->streetAddress();
            $travelpackage->city_destination = $faker->city();
            $travelpackage->country_destination = $faker->country();
            $travelpackage->transport_type = "Tipo X";
            $travelpackage->trasport_company = "Compagnia X";
            $travelpackage->departure_date = "2022-06-12";
            $travelpackage->arriving_date = "20222-07-03";
            $travelpackage->insurance_policy = $faker->boolean();
            $travelpackage->contract_sign = $faker->boolean();
            $travelpackage->contract_expiring = "2022-12-31";
            $travelpackage->name = $faker->firstName();
            $travelpackage->surname = $faker->lastName();
            $travelpackage->birth_date = $faker->date();

            $travelpackage->save();
        }
    }
}
