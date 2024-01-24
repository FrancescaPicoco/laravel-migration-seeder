<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $trains = [
            [
                "company" => "Trenitalia",
                "departure" => "Brindisi",
                "arrivals" => "Roma",
                "departure_time" => "12:00:00",
                "arrivals_time" => "18:30:00",
                "train_code" => "4302",
                "carriages_number" => "8",
                "in_time" => true,
                "deleted" => false,
            ],
            [
                "company" => "Trenitalia",
                "departure" => "Roma",
                "arrivals" => "Monaco",
                "departure_time" => "22:15:00",
                "arrivals_time" => "09:47:00",
                "train_code" => "4309",
                "carriages_number" => "12",
                "in_time" => true,
                "deleted" => false,
            ]
        ];
        foreach ($trains as $train){
            $newTrain = new Train();
            $newTrain->company = $train["company"];
            $newTrain->departure = $train["departure"];
            $newTrain->arrivals = $train["arrivals"];
            $newTrain->departure_time = $train["departure_time"];
            $newTrain->arrivals_time = $train["arrivals_time"];
            $newTrain->train_code = $train["train_code"];
            $newTrain->in_time = $train["in_time"];
            $newTrain->deleted = $train["deleted"];
            $newTrain->save();
        }
    }
}
