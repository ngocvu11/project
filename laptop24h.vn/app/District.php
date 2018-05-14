<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
	protected $fillable = ['name','citi_id'];
	public $timestamps = true;
	public function citi(){
		return $this->belongTo('App\City');
	}
}
