<?php

namespace App\Http\Controllers;

use App\Http\Requests\City\StoreRequest;
use App\Http\Requests\City\UpdateRequest;
use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('city.index', compact('cities'));
    }
    public function show(City $city)
    {
        return view('city.show', compact('city'));
    }

    public function create()
    {
        return view('city.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['is_capital'] = isset($data['is_capital']);
        City::create($data);
        return redirect()->route('city.index');
    }

    public function edit(City $city)
    {
        return view('city.edit', compact('city'));
    }

    public function update(UpdateRequest $request, City $city)
    {
        $data = $request->validated();
        $data['is_capital'] = isset($data['is_capital']);
        $city->update($data);
        return redirect() ->route('city.show', $city->id);
    }

    public function delete(City $city)
    {
        $city->delete();
        return redirect()->route('city.index');
    }
}
