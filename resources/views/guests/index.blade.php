@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Guest List</h1>
        <a href="{{ url('/guests/create') }}" class="btn btn-primary">Add Guest</a>

        <ul class="list-group mt-3">
            @foreach($guests as $guest)
                <li class="list-group-item">
                    <a href="{{ url('/guests/' . $guest->id) }}">
                        {{ $guest->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
