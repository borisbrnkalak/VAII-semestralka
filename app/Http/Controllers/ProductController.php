<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('pages.product', compact('products'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "price" => "required|numeric|gt:0", "name" => "required|string|max:100", "text" => "required|min:10|max:2000", "country" => "required|string", "image" => "required|mimes:png,jpg,jpeg,gif",
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput(request()->all());
        }

        $product_data = $validator->validated();
        $image = request()->file('image')->store('products', ['disk' => 'public']);
        $product_data['filename'] = $image;

        Product::create($product_data);
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('pages.edit-product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validator = Validator::make($request->all(), [
            "price" => "required|numeric|gt:0", "name" => "required|string|max:100", "text" => "required|min:10|max:2000", "country" => "required|string",
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput(request()->all());
        }

        $product->price = $validator->validate()['price'];
        $product->name = $validator->validate()['name'];
        $product->text = $validator->validate()['text'];
        $product->country = $validator->validate()['country'];

        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if (auth()->user()->is_admin == 1) {

            Storage::disk('public')->delete($product->filename);
            $product->delete();
            return redirect()->back();
        }
    }
}
