<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
public function store(Request $request) {
    	$item = Category::create($request->all());
    	return response()->json($item, 201);
    }
}
