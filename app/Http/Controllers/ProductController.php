<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        // return session('user');
        return "Welcome to product page";
    }
}
