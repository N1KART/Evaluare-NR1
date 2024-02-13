@extends('layouts.app')

@section('title','content')

@section('content')
    <h4>Lista de Automobile</h4>
    <a href="{{ route('cars.create')}}">Adauga</a>
    <hr>
    @if (session('success'))
        <div class="alert alert-succes">{{session('success')}}</div>
        
    @endif
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cars as $car)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{$car->user()->get()->first()->name }}</td>
              <td>{{$car->car }}</td>
              <td>
                  <a href="">Edit</a>
                  <a href="">Delete</a>
              </td>
          </tr>
            @empty
                <tr>
                    <td colspan="4">No data</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
    