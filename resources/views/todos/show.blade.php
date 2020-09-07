@extends('layouts.app')

@section('title')
<title>Todo- {{ $todo->name }}</title>
@endsection

@section('content')

<h1 class="text-center my-5">{{ $todo->name }}</h1>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Details</div>
            <div class="card-body">
                {{ $todo->description }}
            </div>
            
        </div>
        <a href="/todos/{{ $todo->id }}/edit" class="btn my-2 btn-success">Edit</a>
        <a href="/todos/{{ $todo->id }}/delete" class="btn my-2 float-right btn-danger">Delete</a>
    </div>
</div>

@endsection