<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    private $blogs;
    private $blog;
    // start for home 
    function index()
    {
        return view('welcome');
    }
    // end for home 
    // start for blog 
    function blogs()
    {
        return view('blog.blogs');
    }
    // end for blog 
    // start add 
    function add(Request $request)
    {
        Blog::newBlog($request);
       return redirect('/blogs')->with('addmessage','Blog Successfully Inserted');
    }
    // end add 
    // start for manageblogs 
    function manageblogs()
    {
        $this->blogs = Blog::orderBy('id','desc')->get();
        return view('blog.manageblogs',['blogs'=>$this->blogs]);
    }
    // end for manageblogs 
    // start for edit 
   function edit($id)
   {
    //    return $id;
    $this->blog = Blog::find($id);
    // return $this->blog;
    return view('blog.edit',['blog'=>$this->blog]);
   }
    // end for edit 
    // start for update 
    function update(Request $request ,$id)
    {
        Blog::updateProduct($request,$id);
        return redirect('/manageblogs')->with('updatemsg','Update Successfully Completed');
    }
    // end for update 
}
