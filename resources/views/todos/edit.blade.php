@extends('layouts.app')

@section('title')
<title>Update Todo</title>
@endsection

@section('content')

<h1 class="text-center my-5">Update Todo</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"> Edit Todo </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            @foreach($errors->all() as $error)
                                <li class="list-group-item"> {{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="/todos/{{ $todo->id }}/update-todos">
                    @csrf
                    <div class="form-group">
                        <input name="name" value="{{ $todo->name }}" type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <textarea name="description" class="form-control" cols="5" rows="5" placeholder="Description">{{ $todo->description }}</textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
</div>

@endsection