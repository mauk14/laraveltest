@extends('layouts.app')

@section('title-block'){{$data->theme}} @endsection

@section('content')
    <h1>{{$data->theme}}</h1>
    <div class="alert alert-info">
        <h3>{{$data->name}}</h3>
        <p>{{$data->email}}</p>
        <p>{{$data->message}}</p>
        <p><small>{{$data->created_at}}</small></p>
        <a href="{{route('message-update', $data->id)}}"><button class="btn btn-primary">Change</button></a>
        <a href="{{route('message-delete', $data->id)}}"><button class="btn btn-danger">Delete</button></a>
    </div>
@endsection