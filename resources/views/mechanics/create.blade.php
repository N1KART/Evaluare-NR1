@extends('layouts.app')

@section('title', 'Create Mehcanic')

@section('content')

    <form action="{{route('mechanics.store')}}" method="post">
        @csrf
        <label for="mechanic_id">Mechanic : </label>    
        <select name="mechanic_id" id="mechanic_id">
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->fullName() }}</option>
            @endforeach
        </select>
        <br>
        <label for="car">Masina</label>
        <input type="text" name="car" id="car" placeholder="Masina"><br>
        <button type="submit">Save</button>
    </form>

@endsection