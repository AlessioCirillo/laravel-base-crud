@extends('layouts.main')

@section('content')
    <div class="container mb-5">
        <h1>{{ $classroom->name }} details</h1>
        <h6>ID:{{ $classroom->id }}</h6>
        <hr>

        <p>{{ $classroom->description }}</p>
        <hr>
        
        <div class="mb-3">
            <p>Created at: {{ $classroom->created_at }}</p>
            <p>Updated at: {{ $classroom->updated_at }}</p>
        </div>
    </div>
@endsection