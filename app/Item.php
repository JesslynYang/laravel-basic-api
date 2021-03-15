<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $fillable = ['store_id', 'category_id', 'name', 'slug', 'price', 'description'];
}
