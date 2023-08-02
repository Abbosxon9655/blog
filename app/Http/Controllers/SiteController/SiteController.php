<?php

namespace App\Http\Controllers\SiteController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{

    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->limit(10)->get();
        $posts = Post::inRandomOrder()->limit(6)->latest()->get();
        $popular_news = Post::inRandomOrder()->limit(5)->get();
        $latest_news = Post::all();

        return view('welcome', compact('categories', 'posts', 'latest_news', 'popular_news'));
    }

    public function article()
    {
        return view('pages.article');
    }

    // public function contact()
    // {
    //     return view('pages.contact');
    // }

    public function get_contact()
    {
        $categories = Category::orderBy('id', 'DESC')->limit(10)->get();

        return view('pages.contact', compact('categories'));
    }



    // public function list()
    // {
    //     return view('pages.list');
    // }


    public function list($id)
    {
        $categories = Category::limit(10)->latest()->get();
        $category = Category::where('id', $id)->first();
        $posts = $category->posts()->paginate(6);
        $popular_news = Post::limit(5)->where('id', '!=', $id)->inRandomOrder()->get();
        
        
        return view('pages.list',compact('categories', 'category', 'posts', 'popular_news'));
    }

    public function singlePost($id){

        $post = Post::where('id', $id)->first();
        $categories = Category::orderBy('id', 'DESC')->limit(10)->get();
        $posts = Post::inRandomOrder()->limit(3)->get();
        $popular_news = Post::inRandomOrder()->limit(5)->get();


        return view('pages.singlePost', compact('post', 'categories', 'posts', 'popular_news'));
    }



      public function post_messages(Request $request)
    {
        DB::table('messages')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'content' => $request->content,
            'file' => $request->file,
            'status' => 0
        ]);
        
        return back()->with('success', 'Xabar jo`natildi');
    }
}
