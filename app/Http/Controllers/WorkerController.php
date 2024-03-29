<?php

namespace App\Http\Controllers;

use App\Http\Filters\Var1\WorkerFilter;
use App\Http\Filters\Var2\Worker\Age;
use App\Http\Filters\Var2\Worker\AgeFrom;
use App\Http\Filters\Var2\Worker\AgeTo;
use App\Http\Filters\Var2\Worker\Description;
use App\Http\Filters\Var2\Worker\Email;
use App\Http\Filters\Var2\Worker\IsMarried;
use App\Http\Filters\Var2\Worker\Name;
use App\Http\Filters\Var2\Worker\Surname;
use App\Http\Requests\Worker\IndexRequest;
use App\Http\Requests\Worker\StoreRequest;
use App\Http\Requests\Worker\UpdateRequest;
use App\Models\Worker;
use Illuminate\Pipeline\Pipeline;


class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $workers = app()->make(Pipeline::class)
            ->send(Worker::query())
            ->through([
                Name::class,
                Surname::class,
                AgeFrom::class,
                AgeTo::class,
                Email::class,
                Description::class,
                IsMarried::class,
            ])
            ->thenReturn();
        $workers = $workers->paginate(4)->withQueryString();
        return view('worker.index', compact('workers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', Worker::class);
        return view('worker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        $this->authorize('create', Worker::class);
        $data = $request->validated();
        Worker::create($data);
        return redirect()->route('workers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Worker $worker)
    {
        return view('worker.show', compact('worker'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Worker $worker)
    {
        $this->authorize('create', $worker);

        return view('worker.edit', compact('worker'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(UpdateRequest $request, Worker $worker)
    {
        $this->authorize('create', $worker);

        $data = $request->validated();
        $worker->update($data);
        return redirect()->route('workers.show', $worker->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Worker $worker)
    {
        $this->authorize('delete', $worker);

        $worker->delete();
        return redirect()->route('workers.index');
    }
}
