<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use App\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function post() // functionto view post form
    {
      return view ('post');
    }


    public function savepost(Request $request) // save post data to DB
    {
      $user_id = Auth::id();

      $file = $request->file('photo');
      $filename = time().'-'.$file->getClientOriginalName();
      Storage::disk('public')->putFileAs('photos', $file, $filename);

      $post =  new post;

      $post->user_id=$user_id;
      $post->title=$request->caption;
      $post->content=$filename;

      $post->save();

      return redirect()->route('home');
    }



    public function view()
    {
      echo asset('storage/photos/test.jpg');
    }

    public function viewposts() // view login users posts.
    {
          $user_id = Auth::id();

          $post = DB::table('posts')
            ->select('id','title','content','user_id')
            ->where('user_id',$user_id)
            ->get();
            return view('viewposts')->with('posts',$post);
    }


    public function delete_function($id) // deleting posts in post view
      {
        $delete = DB::table('posts')
              ->where('id',$id)
              ->delete();
          return redirect()->route('home');
      }


      public function update($id) // updation posts in post view
      {
        $post = post::find($id);
        return view('update')->with('update',$post);
      }


      public function save(Request $request,$id)
      {

        $post = post::find($id);

        $file = $request->file('photo');
        $filename = time().'-'.$file->getClientOriginalName();
        Storage::disk('public')->putFileAs('photos', $file, $filename);

        $post->title = $request->caption;
        $post->content = $filename;

        $post->save();

        return redirect()->route('home');
      }
}
