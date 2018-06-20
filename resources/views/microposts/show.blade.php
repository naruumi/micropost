@extends('layouts.app')

@section('content')
<?php $user = $micropost->user; ?>
    <p>id: {{ $micropost->id }}</p>
    <h1>{{ $micropost->title }}</h1>
    <p>{{ $micropost->content }}</p>
    
            @if (Auth::check())
                  {!! Form::open(['route' => 'comments.store']) !!}
                      <div class="form-group">
                          
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                          
                          {{Form::hidden('micropost_id', $micropost->id, ['micropost_id' => $micropost->id])}}
                          {{Form::hidden('user_id', $user->id, ['user_id' => $user->id])}}
                          
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
                  
            @endif
@endsection