<?php

namespace App\Http\Controllers;

use App\Http\Requests\Animal\StoreRequest;
use App\Http\Requests\Animal\UpdateRequest;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
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
