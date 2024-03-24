<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $postsFromDB = Post::all();
        return view('posts.index', ['posts'=> $postsFromDB]);
    }

    public function show(Post $post){ //type hinting
        // dd($post);
        // $singlePostFromDB = Post::findOrFail($post); //model object

        // if(is_null($singlePostFromDB)){
        //     return to_route('posts.index');
        // }

        // dd($singlePostFromDB);

        // $singlePostFromDB = Post::where('id', $postId)->first; //model object
        // dd($singlePostFromDB);

        // $singlePostFromDB = Post::where('id', $postId)->get(); //collection object
        // dd($singlePostFromDB);

        // dd(
        //     Post::where('title', 'PHP')->first() // select * from posts where title = 'php' limit 1;
        // );

        // dd(
        //     Post::where('title', 'PHP')->get() // select * from posts where title = 'php';
        // );

        return view('posts.show',['post' => $post]);

    }

    public function create(){

        $users = User::all();
        return view('posts.create', ['users'=> $users]);
    }

    public function store(){

        // $request = request();
        // dd($request->title, request()->all());

        $data = request()->all();

        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

        // dd($data, $title, $description, $postCreator);

        // store the submited data to the database
        // $post = new Post;

        // $post->title = $title;
        // $post->description = $description;

        // $post-> save();


        Post::create(['title'=> $title,'description'=> $description, 'user_id'=>$postCreator]);

        return to_route('posts.index');
    }

    
    public function edit(Post $post){

        $users = User::all();
        return view('posts.edit', ['users'=> $users, 'post' => $post]);
    }

    
    public function update($postId){

        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

        
        $singlePostFromDB = Post::find($postId);
        $singlePostFromDB->update([
            'title'=> $title,
            'description'=> $description,
            'user_id'=>$postCreator
        ]);

        return to_route('posts.show', $postId);
    }

    public function destroy($postId){

        $post = Post::find($postId);
        $post->delete();

        // Post::where('id', $postId)->delete();
        
        return to_route('posts.index', $postId);
    }
}
