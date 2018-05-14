<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socail extends Model
{
    protected $table = 'socails';
	protected $fillable = ['user_id','provider_user_id','provider'];
	public $timestamps = true;
	public function User(){
		return $this->belongTo('App\User');
	}
	
}
