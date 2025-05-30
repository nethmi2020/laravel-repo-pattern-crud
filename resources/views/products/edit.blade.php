@extends('layouts.app')

@section('content')

    <h1 class="text-center text-2xl font-bold mt-2">Update Product</h1>
    <hr>
    <br>


    <div class="container mx-auto max-w-md bg-white shadow-md rouded p-6 mt-4">

        <form action="{{ url('product/update' ,$product->id)}}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Product Name</label>
                <input type="text" name="name" placeholder="Enter product name"
                    value="{{old('name',$product->name )}}"class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Product Price</label>
                <input type="text" name="price" placeholder="Enter product price"
                  value="{{old('price',$product->price )}}"   class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="text-right">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded transition duration-200">
                Update
            </button>
        </div>
        </form>
    </div>


@endsection