<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('client.index', compact('clients'));
    }

    public function show(Client $client)
    {
        return view('client.show', compact('client'));
    }

    public function create()
    {
        return view('client.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['is_married'] = isset($data['is_married']);
        Client::create($data);
        return redirect()->route('client.index');
    }


    public function edit(Client $client)
    {
        return view('client.edit', compact('client'));
    }

    public function update(Client $client, UpdateRequest $request)
    {
        $data = $request->validated();
        $data['is_married'] = isset($data['is_married']);
        $client->update($data);
        return redirect()->route('client.show', $client->id);
    }

    public function delete(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index');
    }
}
