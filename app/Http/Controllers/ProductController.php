<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $query = Product::get();


        return view('products.index', ['products' => $query]);
    }

    public function create()
    {

        return view('products.create');
    }

    public function store(Request $request)
    {

      $inputs = $request->only(['title','weight','height','size','color','price','made_in','material']);
        // $inputs = $request->all();
        Product::create($inputs);
        return redirect('products');
    }

    public function show($id)
    {
        $products = Product::find($id);
        return view('products.show', ['data' => $products]);
    }

    public function edit($id)
    {
        $query=Product::where('id',$id)->first();
        return view('products.edit',['query'=>$query]);
    }

    public function update(Request $request, $id)
    {
        $data=$request->only(['title','body','color','size','price']);
        Product::where('id',$id)->update($data);
        return redirect('products')->with('success'.'محصول با موفقیت ویرایش شد');
    }

    public function destroy($id)
    {
        Product::query()
            ->where('id', $id)->delete();

        return back()->with('success'.'محصول با موفقیت حذف شد');
    }


}
