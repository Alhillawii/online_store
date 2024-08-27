<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    // Display a listing of the products
    public function index()
    {
        $products = product::all();
        return view('dashboard.products.index', compact('products'));
    }

    // Show the form for creating a new product
    public function create()
    {
        return view('dashboard.products.create');
    }

    // Store a newly created product in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'string',
            'image' => 'mimes:png,jpg,jpeg,webp'
            // Add other validation rules as necessary
        ]);

        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $path = 'uploads/product/';
             $file ->move( $path , $filename);    
     }


        product::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'category_id'=>$request->category_id,
            'image'=>$path.$filename,

        ]);

        return redirect()->route('dashboard.products.index')->with('success', 'Product created successfully.');
    }

    // Show the form for editing the specified product
    public function edit($id)
    {
        $product = product::findOrFail($id);
        return view('dashboard.products.edit', compact('product'));
    }

    // Update the specified product in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
             'image' => 'mimes:png,jpg,jpeg,webp'
            // Add other validation rules as necessary
        ]);

        $product = product::findOrFail($id);
        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $path = 'uploads/product/';
             $file ->move( $path , $filename);    
     }

     if (File::exists($product->image)) {
        File::delete($product->image);
     }


        
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $path, // Set the image path (new or unchanged)
        ]);


        return redirect()->route('dashboard.products.index')->with('success', 'Product updated successfully.');
    }

    // Remove the specified product from the database
    public function destroy($id)
    {
        $product = product::findOrFail($id);
        $product->delete();

        return redirect()->route('dashboard.products.index')->with('success', 'Product deleted successfully.');
    }
}

