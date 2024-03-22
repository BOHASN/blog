<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $allPosts = [
            ['id' => 1, 'title' => 'PHP','posted_by' => 'Ahmad','created_at' => '2021-10-10 09:00:00'],
            ['id' => 2, 'title' => 'Javascript','posted_by' => 'Mohamed','created_at' => '2022-08-20 07:00:00'],
            ['id' => 3, 'title' => 'HTML','posted_by' => 'Mahmoud','created_at' => '2023-12-06 04:00:00'],
            ['id' => 4, 'title' => 'CSS','posted_by' => 'Moustafa','created_at' => '2024-03-02 01:00:00'],
        ];
        return view('posts.index', ['posts'=> $allPosts]);
    }

    public function show($postId){

        $singlePost = [
            'id' => 1, 'title' => 'PHP','description'=> 'PHP is cool language','posted_by' => 'Ahmad','created_at' => '2021-10-10 09:00:00',
            
        ];
        return view('posts.show',['post' => $singlePost]);

    }
}
