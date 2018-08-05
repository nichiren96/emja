<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('private.categories.category');
    }

    public function show()
    {
        $categories = Category::all();
        return view('private.categories.show', compact('categories'));
    }


    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect(route('show_category'))->with(['success' => 'Catégorie ajoutéé avec succès']);
    }

    public function update(Category $category, Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('private.categories.category', compact('category'));
        }

        $category->update($request->all());
        return redirect(route('show_category'))->with(['success' => 'Catégorie modifiée avec succès']);
    }

    public function delete(Category $category)
    {
        $category->delete();
        return redirect(route('show_category'))->with(['success' => 'Catégorie supprimée avec succès']);

    }
}
