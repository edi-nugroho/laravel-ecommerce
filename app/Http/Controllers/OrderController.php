<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('order', [
            'title' => 'Orders - ' . auth()->user()->name
        ]);
    }

    public function detail()
    {
        return view('order-detail', [
            'title' => 'Order detail'
        ]);
    }
}
