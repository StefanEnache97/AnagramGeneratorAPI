<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class AnagramController extends Controller
{
    public function anagram(Request $request)
    {
        $content = $request->content;
        $number = $request->number;

        $path = public_path("CreateAnagram.jar");
        exec("java -jar $path $content", $anagram);

        echo (json_encode(array_slice($anagram, 0, $number)));
    }
}
