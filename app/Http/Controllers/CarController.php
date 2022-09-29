<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        dd($cars->toArray());
    }

    public function show()
    {
        $car = Car::first();
        dd($car->toArray());
    }

    public function create()
    {
        $car1 = [
            'title' => 'Zhiguli',
            'model' => '2114',
            'color' => 'black',
            'power' => '60',
            'length' => '4.5',
            'is_sport_car' => 1,
            'description' => 'text',
        ];

        $car2 = [
            'title' => 'Bugatti',
            'model' => 'veeron',
            'color' => 'red',
            'power' => '1000',
            'length' => '3.5',
            'is_sport_car' => 0,
            'description' => 'text',
        ];

        Car::create($car1);
        Car::create($car2);

        return 'Cars created!!!';

    }

    public function update()
    {
        $car = Car::find(2);
        $car->update(
            [
                'color' => 'yellow'
            ]
        );
        return 'Car was updated!';
    }

    public function delete()
    {
        $car = Car::find(2);

        $car->delete();

        return $car->nickname . ' was deleted';

    }
}
