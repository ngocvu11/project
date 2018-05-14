<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chitetdonhang extends Model
{
    protected $table = 'chitetdonhangs';
	protected $fillable = ['transaction_id','product_id','product_image','product_name','soluong','total','status'];
	public $timestamps = true;
	public function transact(){
		return $this->belongTo('App\Transaction');
	}
}
