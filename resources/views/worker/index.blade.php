@extends('layout.worker')
@section('content')
<h3>All workers</h3>
@can('create', \App\Models\Worker::class)
<a href="{{route('workers.create')}}">Add worker</a>
@endcan
<hr>
<form action="{{route('workers.index')}}">
    <div class="row">
        <div class="col-auto">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{request()->get('name')}}">
    </div>
        <div class="col-auto">
            <label for="surname">Surname:</label>
            <input type="text" class="form-control" id="surname" name="surname" value="{{request()->get('surname')}}">
        </div>
        <div class="col-auto">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" name="email" value="{{request()->get('email')}}">
        </div>
        <div class="col-auto">
            <label for="age_from">Age_from:</label>
            <input type="text" class="form-control" id="age_from" name="age_from" value="{{request()->get('age_from')}}">
        </div>
        <div class="col-auto">
            <label for="age_to">Age_to:</label>
            <input type="text" class="form-control" id="age_to" name="age_to" value="{{request()->get('age_to')}}">
        </div>
        <div class="col-auto">
            <label for="description">Description:</label>
            <input type="text" class="form-control" id="description" name="description" value="{{request()->get('description')}}">
        </div>
        <div class="col-auto">
            <label for="is_married">Is_married:</label>
            <input type="checkbox"  id="is_married" name="is_married" @if(request()->get('is_married') == 'on')checked @endif>
        </div>
        <div class="col-auto">
            <input type="submit"  id="btn" class="btn btn-primary">
        </div>
    </div>

</form>
<hr>
    @foreach($workers as $worker)
        <div>id: {{$worker->id}}</div>
        <div>name: {{$worker->name}}</div>
        <div>surname: {{$worker->surname}}</div>
        <div>age: {{$worker->age}}</div>
        <div>email: {{$worker->email}}</div>
        <div>is_married: {{$worker->is_married}}</div>
        <div>description:
            <div>{{$worker->description}}</div>
        </div>
        <div><a href="{{route('workers.show', $worker->id)}}">Выбрать</a></div>
        @can('update', $worker)
            <div><a href="{{route('workers.edit', $worker->id)}}">Редактировать</a></div>
        @endcan
        @can('delete', $worker)
            <form action="{{route('workers.destroy', $worker->id)}}" method="post">
                @csrf
                @method('Delete')
                <input type="submit" value="Удалить">
            </form>
        @endcan
        <hr>
    @endforeach
        <div class="d-flex justify-content-center">
            {!! $workers->links() !!}
        </div>

@endsection
