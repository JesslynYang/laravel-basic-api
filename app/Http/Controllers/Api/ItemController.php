<?php

namespace App\Http\Controllers\Api;

use App\Item;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
	public function getData() {
    	return response()->json(Item::get(), 200);
    }

    public function getDataById($id) {
    	$item = Item::find($id);

    	if(is_null($item)) {
	    	return response()->json(["message" => "Record not found!"], 404);
    	}
    	return response()->json(Item::find($id), 200);
    }

    public function store(Request $request) {
    	$rules = [
    		'store_id' => 'required',
    		'category_id' => 'required',
    		'name' => 'required|min:3',
    		'price' => 'required|integer',
    		'description' => 'required'
    	];

    	$validator = Validator::make($request->all(), $rules);

    	if($validator->fails()) {
    		return response()->json($validator->errors(), 400);
    	} 

    	$request['slug'] = \Str::slug($request->name);
    	$item = Item::create($request->all());
    	return response()->json($item, 201);
    }

    public function update(Request $request, $id) {
    	$item=  Item::find($id);

    	if(is_null($item)) {
	    	return response()->json(["message" => "Record not found!"], 404);
    	}
    	$item->update($request->all());
    	return response()->json($item, 200);
    }

    public function destroy($id) {
    	$item = Item::find($id);

    	if(is_null($item)) {
	    	return response()->json(["message" => "Record not found!"], 404);
    	}
    	$item->delete();
    	return response()->json("Item has successfully been deleted!", 204);
    }
}
