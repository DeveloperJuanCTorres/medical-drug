<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('carrito');
    }

    public function checkout()
    {
        return view('checkout');
    }
}

