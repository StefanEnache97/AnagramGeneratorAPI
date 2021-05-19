@extends('master')

@section('title', $message->title)

@section('content')

    <h3>
        {{ $message->title }}
    </h3>
    <p>
        {{$message->content}}
    <p>
    <?php
        $content = $message->content;
        $path = env("SCRIPT_PATH");
        exec("java -jar $path $content", $anagram);
        $cut_array = array_slice($anagram, 0, 10);
        foreach ($cut_array as $key => $sentence) {
            echo($sentence);
            echo("<br>");
        }
    ?>
@endsection