<?php

namespace App\Http\Controllers\Admin;

use App\Events\AuditEvent;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Teg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->get();

        return view('admin.posts.index', compact('posts'));
    }


    public function create()
    {
        $categories = Category::all();

        $tegs = Teg::all();

        return view('admin.posts.create', compact('categories', 'tegs'));
    }

    public function store(Request $request, )
    {
        $user = auth()->user()->name;
        event(new AuditEvent('create', 'posts', $user, $request));

        // dd($request);

        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            $requestData['img'] = $this->upload_file();
        }

        // dd($requestData);

       $post = Post::create($requestData);

       $post->tegs()->attach($request->teg_id);

        return redirect(route('admin.posts.index'))->with('succes', 'Ma`lumot q`oshildi');
    }

    public function show($id)
    {
        
        $post = Post::find($id);

        return view('admin.posts.show', compact('post'));
    }

    public function edit($id)
    {
        $categories = Category::all();

        $post = Post::find($id);

        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $user = auth()->user()->name;
        event(new AuditEvent('edit', 'posts', $user, $post));

        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            $this->unlink_file($post);

            $requestData['img'] = $this->upload_file();
        }

        $post->update($requestData);

        return redirect(route('admin.posts.index'))->with('success', 'Malumot mavaffaqiyatli ozgartirildi');
    }

    public function destroy(Post $post)
    {
        $user = auth()->user()->name;
        event(new AuditEvent('delete', 'posts', $user, $post));

        // Post::find($id)->delete();
        
        $post->delete();
        $this->unlink_file($post);

        return redirect()->route('admin.posts.index')->with('danger', 'Malumot mavaffaqiyatli ochirildi');
    }

    public function upload_file()
    {
        $file = request()->file('img');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('images/', $fileName);
        return $fileName;
    }  

    public function unlink_file(Post $post)
    {
        if(isset($post->img) && file_exists(public_path('/images/'. $post->img)))
        {
            unlink(public_path('/images/'. $post->img));
        }
    }
}
