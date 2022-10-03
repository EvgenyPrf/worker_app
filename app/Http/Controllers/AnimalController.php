<?php

namespace App\Http\Controllers;

use App\Http\Requests\Animal\IndexRequest;
use App\Http\Requests\Animal\StoreRequest;
use App\Http\Requests\Animal\UpdateRequest;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index(IndexRequest $request)
    {
        $data = $request->validated();
        $animalQuery = Animal::query();

        if(isset($data['id'])) {
            $animalQuery->where('id', '=', $data['id']);
        }
        if(isset($data['nickname'])) {
            $animalQuery->where('nickname', 'like', "%{$data['nickname']}%");
        }
        if(isset($data['age_from'])) {
            $animalQuery->where('age', '>', $data['age_from']);
        }
        if(isset($data['age_to'])) {
            $animalQuery->where('age', '<', $data['age_to']);
        }

        if(isset($data['sex'])) {
            $animalQuery->where('sex', 'like', "%{$data['sex']}%");
        }

        if(isset($data['is_predator'])) {
            $animalQuery->where('is_predator', true);
        }

        $animals = $animalQuery->paginate(2);
        return view('animal.index', compact('animals'));
    }

    public function show(Animal $animal)
    {
        return view('animal.show', compact('animal'));
    }

    public function create()
    {
        return view('animal.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['is_predator'] = isset($data['is_predator']);
        Animal::create($data);
        return redirect()->route('animal.index');
    }

    public function update(UpdateRequest $request, Animal $animal)
    {
        $data = $request->validated();
        $data['is_predator'] = isset($data['is_predator']);
        $animal->update($data);
        return redirect()->route('animal.show', $animal->id);
    }

    public function edit(Animal $animal)
    {
        return view('animal.edit', compact('animal'));
    }

    public function delete(Animal $animal)
    {
        $animal->delete();
        return redirect()->route('animal.index');
    }

}
