<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        dd($animals->toArray());
    }

    public function show()
    {
        $animal = Animal::first();
        dd($animal->toArray());
    }

    public function create()
    {
        $animal1 = [
            'nickname' => 'Pushok',
            'title' => 'Horse',
            'sex' => 'male',
            'age' => '8',
            'growth' => '190',
            'description' => 'Horse from north Carolina'
        ];

        $animal2 = [
            'nickname' => 'Raketa',
            'title' => 'dog',
            'sex' => 'female',
            'age' => '6',
            'growth' => '60',
            'description' => 'Dog from north Carolina'
        ];

        Animal::create($animal1);
        Animal::create($animal2);

        return 'Animals created!!!';

    }

    public function update()
    {
        $animal = Animal::find(1);
        $animal->update(
            [
                'nickname' => 'Saharok'
            ]
        );
        return 'Animal updated!';
    }

    public function delete()
    {
        $animal = Animal::find(2);

        $animal->delete();

        return $animal->nickname . ' was deleted';

    }

}
