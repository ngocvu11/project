<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
	protected $fillable = ['userdk_id','namekh','emailkh','phonekh','total','city','district','address','payment','payment_info','ghichu','security','status'];
	public $timestamps = true;
	public function chitietdh(){
		return $this->hasMany('App\Chitetdonhang');
	}
}
