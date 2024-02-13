@extends('layouts.app')

@section('title', 'Create Owner')

@section('content')

    <form action="{{route('owners.store')}}" method="post">
        @csrf
        <label for="car_id">Proprietar : </label>    
        <select name="car_id" id="car_id">
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->fullName() }}</option>
            @endforeach
        </select>
        <br>
        <label for="car">Proprietar</label>
        <input type="text" name="owner" id="owner" placeholder="Proprietar"><br>
        <button type="submit">Save</button>
    </form>

@endsection