<?php
namespace App\Http\Controllers;

use App\Repositories\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productRepo;
    public function __construct(ProductRepositoryInterface $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function index()
    {
        $products = $this->productRepo->all();

        return view('products.index', compact('products'));
        // return response()->json($products);
    }

    public function get($id)
    {

        $product = $this->productRepo->find($id);
        return view('products.product', compact('product'));
    }

    public function getProductCreateForm()
    {

        return view('products.create');

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);
        $product = $this->productRepo->create($validated);
        return redirect()->route('product.index')->with('success', 'Product created!');
    }

    public function edit($id)
    {

        $product = $this->productRepo->find($id);

        // return view('products.edit')->with('product',$product);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request)
    {

        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);
        $product = $this->productRepo->update($request->id, $validated);
        return redirect()->route('product.index')->with('success', 'Product Updated!');
    }

    public function delete($id)
    {

        $product = $this->productRepo->delete($id);

        if ($product) {
            return redirect()->route('product.index')->with('success', 'Product Deleted!');
        }
    }
}
