@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="panel-body">
                <a href="/posts/create" class="btn btn-primary">Create Post</a>
            </div>
        </div>
    </div>
</div>
<table class="table table-striped>">
    <tr>
        <th>Title</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($posts as $post)
     <tr>
         <th>{{$post->title}}</th>
         <th><a href="/posts/{{$post->id}}/edit" class="btn btn-default"></a></th>
         <th></th>
     </tr>
    @endforeach
</table>
@endsection
