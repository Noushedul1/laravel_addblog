<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    private static $blogs;
    private static $image;
    private static $imageName;
    private static $directory;
    private static $blog;

    private static $imageUrl;
    // start for insert 
    public static function getImgUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'blog-image/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }
    public static function newBlog($request)
    {
        self::$blogs = new Blog();

       self::$blogs->name = $request->name;
       self::$blogs->email = $request->email;
       self::$blogs->country = $request->country;
       self::$blogs->phone = $request->phone;
       self::$blogs->description = $request->description;
       self::$blogs->img = self::getImgUrl($request);
       self::$blogs->save();
    }
    // end for insert 

    // start for update 
    public static function updateProduct($request,$id)
    {
        self::$blog = Blog::find($id);
        if($request->file('image'))
        {
            if(file_exists($request->image))
            {
                unlink(self::$blog->img);
            }
            self::$imageUrl = self::getImgUrl($request);
        }
        else
        {
            self::$imageUrl = self::$image->image;
        }
        
        self::$blogs = Blog::find($id);

       self::$blogs->name = $request->name;
       self::$blogs->email = $request->email;
       self::$blogs->country = $request->country;
       self::$blogs->phone = $request->phone;
       self::$blogs->description = $request->description;
       self::$blogs->img = self::$imageUrl;
       self::$blogs->save();

    //    self::saveBasicInfo(self::$blogs,$request,self::getImgUrl($request));
    }
    // end for update 
    // start for common code
    public static function saveBasicInfo($blogs,$request,$imageUrl)
    {
        $blogs->name = $request->name;
       $blogs->email = $request->email;
       $blogs->country = $request->country;
       $blogs->phone = $request->phone;
       $blogs->description = $request->description;
       $blogs->img = $imageUrl;
       $blogs->save();
    }
    // end for common code 
}
