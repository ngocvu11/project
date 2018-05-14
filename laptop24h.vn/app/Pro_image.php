<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pro_image extends Model
{
    protected $table = 'pro_images';
    protected $filltable = ['image','product_id'];
    public $timestamps = true;  
	public function Product(){
		return $this->belongTo('App\Product');
	}
}
