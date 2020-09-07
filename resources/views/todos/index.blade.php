@extends('layouts.app')

@section('title')
<title>Todos</title>
@endsection 

@section('content')

<h1 class="text-center my-5">Todos App</h1>
<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header"> Todos </div>
            <div class="card-body">

                <ul class="list-group">
                    @foreach($todos as $todo)
                   
                    <li class="list-group-item">
                        
                        {{ $todo->name }}
                        
                        @if(!$todo->completed)
                            <a href="/todos/{{$todo->id}}/complete" class="btn text-white btn-warning btn-sm float-right">Complete</a>
                        @endif
                        
                        <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right mr-2">View</a>
                    </li>
                   
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection

