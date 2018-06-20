@extends('layouts.app')

@section('content')
    <h1>id: {{ $micropost->id }}</h1>
    
    {!! Form::model($micropost, ['route' => ['microposts.update', $micropost->id], 'method' => 'put']) !!}

    
        {!! Form::label('title', 'タイトル:') !!}<br>
        {!! Form::text('title') !!}<br>
        {!! Form::label('content', 'メッセージ:') !!}<br>
        {!! Form::textarea('content') !!}<br>
        
        {!!Form::select('status', ['Release' => 'Release', 'Close' => 'Close',])!!}<br>
        
        {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}

    {!! Form::close() !!}
@endsection