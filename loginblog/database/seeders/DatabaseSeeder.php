<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->createPlaces();
    }

    private function createPlaces()
    {
        $place = [
            'name' => 'Caracas',
            'url' => 'www.caracas.com',
            'description' => 'description test'
        ];

        $placeModel = new Place();

        $placeModel->name = $place['name'];
        $placeModel->url = $place['url'];
        $placeModel->description = $place['description'];

        $placeModel->save();
    }
}
