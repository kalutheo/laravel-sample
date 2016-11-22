<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\User::class, 5)->create()->each(function ($u) {
            $car = factory(App\Car::class)->make();
            $car->user()->associate($u);
            $car->save();
        });
    }
}
