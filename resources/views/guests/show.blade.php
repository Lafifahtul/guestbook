@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Guest Details</h1>

        <dl class="row">
            <dt class="col-sm-3">Name:</dt>
            <dd class="col-sm-9">{{ $guest->name }}</dd>

            <dt class="col-sm-3">Message:</dt>
            <dd class="col-sm-9">{{ $guest->message }}</dd>
        </dl>

        <a href="{{ url('/guests') }}" class="btn btn-secondary">Back to Guest List</a>
    </div>
@endsection
