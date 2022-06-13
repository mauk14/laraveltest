@extends('layouts.app')

@section('title-block')All Messages @endsection

@section('content')
    <h1>All Messages</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{$el->name}}</h3>
            <h3>{{$el->theme}}</h3><br>
            <p><small>{{$el->created_at}}</small></p>
            <a href="{{route('message-data-one', $el->id)}}"><button class="btn btn-warning">More</button></a>
        </div>
    @endforeach
@endsection