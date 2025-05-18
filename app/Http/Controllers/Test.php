<?php
namespace App\Http\Controllers;


class Test extends Controller
{
       public function test()
    {

        \Log::info('Create form method called');
        return view('products.create');

    }

}
