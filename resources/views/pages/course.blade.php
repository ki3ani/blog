@extends('layouts\app')
@section('content')
<h1>{{$title}}</h1>
@if(count($courses) > 0)
<ul class="list-group">
    @foreach($courses as $course)
    <li class="list-group-item">{{$course}}</li>
    @endforeach
</ul>
@endsection
@endif
