<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filecity = file_get_contents(base_path('/database/city.json'));
        $fileregency = file_get_contents(base_path('/database/regency.json'));

        $datacity = json_decode($filecity, true);
        $dataregency = json_decode($fileregency, true);

        City::insert($datacity);
        City::insert($dataregency);
    }
}
