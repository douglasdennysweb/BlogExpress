<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class AdminProductsController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $products = $this->product->all();

        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $this->product->create($request->all());

        return redirect()->route('admin.products.index');
    }

    public function edit($id)
    {
        $product = $this->product->find($id);

        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $this->product->find($id)->update($request->all());

        return redirect()->route('admin.products.index');
    }

    public function destroy($id)
    {
        $this->product->find($id)->delete();

        return redirect()->route('admin.products.index');
    }
}
