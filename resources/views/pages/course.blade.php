@extends('layouts\app')
@section('content')
<h1>{{$title}}</h1>
@if(count($courses) > 0)
<ul>
    @foreach($courses as $course)
    <li>{{$course}}</li>
    @endforeach
</ul>
@endsection
@endif
