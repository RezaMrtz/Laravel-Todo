@extends('layouts.app')

<hr><hr><hr>
@section('content')

<div class="btn btn-outline-primary">
    <a href="#">Go Back</a>
</div>
<h1>
    <a href="todo/{{$todo->id}}">
       {{$todo->text}}
    </a>
</h1>
<div class="badge badge-danger">
        {{$todo->due}}
</div>
<hr>
<p>{{$todo->body}}</p>
@endsection