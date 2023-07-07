<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->orderBy('id', 'DESC')->get();

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        Category::create($request->all());

        return redirect()->route('admin.categories.index')->with('success', 'Malumot muvaffaqiyatli qoshildi');
    }

    public function show($id)
    {
        $category = Category::find($id);

        return view('admin.categories.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        Category::find($id)->update($request->all());

        return redirect()->route('admin.categories.index')->with('success', 'Malumot mavaffaqiyatli ozgartirildi');
    }

    public function destroy($id)
    {
        Category::find($id)->delete();

        return redirect()->route('admin.categories.index')->with('danger', 'Malumot mavaffaqiyatli ochirildi');
    }
}
