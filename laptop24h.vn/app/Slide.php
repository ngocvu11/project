<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slides';
	protected $fillable = ['name','image','link','published'];
	public $timestamps = true;
	public function User(){
		return $this->hasMany('App\User');
	}
	
}
