<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function firstAction(){
            $localName = 'ahmed';
            $newbooks = ['PHP', 'JAVA', 'CSS'];
            return view('test',['name' => $localName, 'books' => $newbooks]);
    }

    public function greet(){
        return 'hello this is greet action';
    }
}
