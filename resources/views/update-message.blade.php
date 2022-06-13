@extends('layouts.app')

@section('title-block') Contact @endsection

@section('content')
    <h1>Contact</h1>

    <form action="{{route('message-update-post', $data->id)}}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Input your name</label>
            <input type="text" name="name" placeholder="name" id="name" class="form-control" value="{{$data->name}}">
        </div>

        <div class="form-group">
            <label for="email">Input your email</label>
            <input type="email" name="email" placeholder="email" id="email" class="form-control" value="{{$data->email}}">
        </div>

        <div class="form-group">
            <label for="theme">Input theme</label>
            <input type="text" name="theme" placeholder="theme" id="theme" class="form-control" value="{{$data->theme}}">
        </div>

        <div class="form-group">
            <label for="message">Input message</label>
            <textarea name="message" placeholder="message" id="theme" class="form-control">{{$data->message}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Send</button>
    </form>
@endsection