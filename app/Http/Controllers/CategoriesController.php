<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();
        return view('backend.category.categorylist', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.categorynew');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator= $request->validate([
            'name' => ['required','string','min:3','max:50','unique:categories'],
        ]);
        // if($validator->fails()) {
        //     return back()->withErrors($validator);
        // }
        $category= new Categories();
        $category->name=$request->name;
        $category->save();
        return redirect('/category')->with('success', 'Successfully added new category.');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $categories = Categories::all();
        return view('frontend.products', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category=Categories::find($id);
        return view('backend.category.categoryedit',[
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator= $request->validate([
            'name' => ['required','string','min:3','max:50','unique:categories'],
        ]);
        // $genre= Genre::find($id);
        // $genre->name=$request->name;
        // $genre->save();
        $name=$request->name;
        $data=[
            'name' => $name,
        ];
        Categories::where('id',$id)->update($data);
        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $genre = Categories::find($id);
        $genre->delete();
        return redirect('/category');
    }
}
