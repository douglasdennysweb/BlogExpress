<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class AdminCategoriesController extends Controller
{
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->all();

        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $this->category->create($request->all());

        return redirect()->route('admin.categories.index');
    }

    public function edit($id)
    {
        $category = $this->category->find($id);

        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->category->find($id)->update($request->all());

        return redirect()->route('admin.categories.index');
    }

    public function destroy($id)
    {
        $this->category->find($id)->delete();

        return redirect()->route('admin.categories.index');
    }
}
