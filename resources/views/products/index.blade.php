@extends('layouts.app')

@section('content')

    <h1 class="text-center mt-2">All Products</h1>
    <hr>
    <br>


    <div class="container">
       <a href="{{ url('product/create-new') }}" class="bg-blue-500 hover:bg-blue-600 text-white text-xs px-3 py-1 rounded">Add New Product</a>
        <div class="row">
            <div class="p-4">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">
                    <thead>
                        <tr class="bg-gray-100 text-left text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6">Name</th>
                            <th class="py-3 px-6">Price</th>
                            <th class="py-3 px-6">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 text-sm divide-y divide-gray-200">
                        @foreach ($products as $product)

                            <tr>
                                <td class="py-3 px-6">{{ $product->name }}</td>
                                <td class="py-3 px-6">{{ $product->price }}</td>
                                <td class="py-3 px-6">
                                    <div class="flex  gap-2">
                                        <a
                                           href="{{url('/product',$product->id)}}"  class="bg-blue-500 hover:bg-blue-600 text-white text-xs px-3 py-1 rounded">View</a>
                                        <button
                                            class="bg-green-500 hover:bg-green-600 text-white text-xs px-3 py-1 rounded">Edit</button>
                                        <button
                                            class="bg-red-500 hover:bg-red-600 text-white text-xs px-3 py-1 rounded">Delete</button>
                                    </div>

                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>


@endsection