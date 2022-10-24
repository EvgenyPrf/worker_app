@extends('layout.animal')
@section('content')
<h3>Update page</h3>
<hr>
<form action="{{route('animal.update', $animal->id)}}" method="post">
    @csrf
    @method('Patch')
    <div style="margin-bottom: 15px"><input type="text" name="nickname" placeholder="nickname" value="{{old('nickname') ?? $animal->nickname}}">
        @error('nickname')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><input type="text" name="title" placeholder="title" value="{{old('title') ?? $animal->title}}">
        @error('title')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><input type="text" name="sex" placeholder="sex" value="{{old('sex') ?? $animal->sex}}">
        @error('sex')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><input type="number" name="age" placeholder="age" value="{{old('age') ?? $animal->age}}">
        @error('age')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><input type="number" name="growth" placeholder="growth"
                                            value="{{old('age') ?? $animal->growth}}">
        @error('growth')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><textarea name="description" placeholder="description">
            {{old('age') ?? $animal -> description}}
        </textarea>
        @error('description')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div style="margin-bottom: 15px"><input type="checkbox" name="is_predator" id="isPredator"
        {{$animal->is_predator ? ' checked' : ''}}>
        <label for="isPredator">is predator</label>
    </div>
    <input type="submit" value="Сохранить">
</form>
@endsection
