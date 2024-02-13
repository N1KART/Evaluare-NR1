@extends('layouts.app')

@section('title', 'Create Car')

@section('content')

    <form action="{{route('cars.store')}}" method="post">
        @csrf
        <label for="mechanic_id">Mechanic : </label>    
        <select name="mechanic_id" id="mechanic_id">
            @foreach ($cars as $car)
                <option value="{{$car->id}}">{{$car->fullName() }}</option>
            @endforeach
        </select>
        <br>
        <label for="car">Masina</label>
        <input type="text" name="car" id="car" placeholder="Masina"><br>
        <button type="submit">Save</button>
    </form>

@endsection