<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categories;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
        return view('backend.product.productlist',[
            'products'=>$products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        return view('backend.product.productnew',
    [
        'categories'=>$categories
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $photo=$request->photo;
        // dd($request->category_id);
        $imgname=time().'.'.$photo->extension();
        $photo->move(public_path('stroage/products/'), $imgname);
        // dd($imgname);
        $photo_filepath='/stroage/products/'.$imgname;
        $product= new Product();
        $product->name=$request->name;
        $product->photo=$photo_filepath;
        $product->category_id=$request->categoy_id;
        $product->product_no=$request->product_no;
        $product->save();
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product=Product::find($id);
        $categories = Categories::all();
        return view('backend.product.productedit',
    [
        'categories'=>$categories,
        'product'=>$product
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $new_photo=$request->new_photo;
        $old_photo=$request->old_photo;
        // dd($new_photo);
        $name=$request->name;
        $category_id=$request->categoy_id;
        $product_no=$request->product_no;
        if ($new_photo!=null){
            $imgname= time().'.'.$new_photo->extension();
            $new_photo->move(public_path('stroage/products/'), $imgname);
            $photo_filepath='/stroage/products/'.$imgname;
            $new_photo=$photo_filepath;
            $data=[
                'name' => $name,
                'photo' => $new_photo,
                'category_id' => $category_id,
                'product_no' => $product_no
            ];
            Product::where('id',$id)->update($data);
        }else{
            $data=[
                'name' => $name,
                'photo' => $old_photo,
                'category_id' => $category_id,
                'product_no' => $product_no
            ];
            Product::where('id',$id)->update($data);
        }
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect('/products');
    }
}
