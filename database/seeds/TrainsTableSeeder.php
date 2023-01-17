<?php

use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [   'name' => 'Italo',
                'departure_time' => '8.00',
                'arrival_time' => '12.00',
                'binary_number' => 7,
                'number_carriages' => 12,
                'departure_station' => 'Milano',
                'arrival_station' => 'Roma',
                'price_tiket' => 30.20
            ]

        ];

        foreach($trains as $elem){
            $newTrain = new Train();
            $newTrain ->name = $elem['name'];
            $newTrain ->departure_time = $elem['departure_time'];
            $newTrain ->arrival_time = $elem['arrival_time'];
            $newTrain ->binary_number = $elem['binary_number'];
            $newTrain ->number_carriages = $elem['number_carriages'];
            $newTrain ->departure_station = $elem['departure_station'];
            $newTrain ->arrival_station = $elem['arrival_station'];
            $newTrain ->price_tiket = $elem['price_tiket'];
            $newTrain -> save();
        }
    }
}
