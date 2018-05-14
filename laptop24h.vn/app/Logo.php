<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    protected $table = 'logos';
    protected $filltable = ['name','image','link','published'];
    public $timestamps = true;  
	public function Product(){
		return $this->hasMany('App\Product');
	}
}
