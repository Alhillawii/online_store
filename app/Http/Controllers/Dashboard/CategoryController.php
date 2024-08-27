<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = category::all();
        return view('dashboard.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        category::create($request->all());

        return redirect()->route('dashboard.categories.index')->with('success', 'Category created successfully.');
    }

    public function edit($id)
    {
        $category = category::findOrFail($id);
        return view('dashboard.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category = category::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('dashboard.categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = category::findOrFail($id);
        $category->delete();

        return redirect()->route('dashboard.categories.index')->with('success', 'Category deleted successfully.');
    }
}
