<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{
    //list of all blogs
    public function index()
{
	$posts = Blog::all(); //fetch all blog posts from DB
	return view('index')->with('posts',$posts); //returns the view with posts
	
}

//show one post by id
public function show($id)
{
    $post=Blog::find($id);
    return view('show')->with('post',$post);

}

public function create()
{
    return view('create');
}
public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $posts=Blog::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return view('store')->with('posts',$posts);
    }

 //method to update a record in database
 public function update($id){
    $post=Blog::find($id);
    return view('update')->with('post',$post);
   
  }

  public function save($id){
    $post=Blog::find($id);
    $post->title=request()->get('title');
    $post->body=request()->get('body');
     $post->save();
     $alert="You have successfully updated the post(".$post->id.")";

     return view('edit')
     ->with('post',$post)
     ->with('alert',$alert);
    
   
  }

    //method to delete on record from database
public function destroy($id){
  $post=Blog::find($id);
  if($post){
  $post->delete();
  
}
return view('delete'); 

}
   
}
