@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Add Guest</h1>

        <form method="post" action="{{ url('/guests') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message:</label>
                <textarea id="message" name="message" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <a href="{{ url('/guests') }}" class="btn btn-secondary mt-3">Back to Guest List</a>
    </div>
@endsection
