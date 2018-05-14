<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tintuc extends Model
{
    protected $table = 'tintucs';
	protected $fillable = ['name','alias','intro','content','image','description','published'];
	public $timestamps = true;
	
}
