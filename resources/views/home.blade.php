@extends('master')

@section('title','Homepage')

@section('content')

    <h1>Post a Request:</h1>

    <form action="/create" method="post">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="content" placeholder="Content">
        {{ csrf_field() }}
        <button type="submit">Submit</button>
    </form>

    <h1>Recent Requests:</h1>

    <ul>
        @foreach ($messages as $message)
            <li>
                <strong>{{$message->title}}</strong>
                <br>
                {{$message->content}}
                <br>
                {{$message->created_at->diffForHumans()}}
                <br>
                <a href="/message/{{ $message->id}}">View Anagram</a>
            </li>
        @endforeach
    </ul>
@endsection