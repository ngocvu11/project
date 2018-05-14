<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
	protected $fillable = ['name','alias','masp','price','price_new','color','kichthuoc','trongluong','manhinh','dophangiai','pin','ram','cpu','ocung','cacdohoa','diaquang','conggiaotiep','webcam','hedieuhanh','baohanh','tinhtrang','intro','content','image','keywords','description','published','user_id','cate_id','stt'];
	public $timestamps = true;
	public function Cate(){
		return $this->belongTo('App\Cate');
	}  
	public function User(){
		return $this->hasMany('App\User');
	}
	public function Pro_images(){
		return $this->hasMany('App\Pro_image');
	}
}
