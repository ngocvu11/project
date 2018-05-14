<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
 //   return view('frontend.page.home');
//});
Route::get('/', 'HomeController@index')->name('home');
Route::get('chitiettintuc/{id}',['as'=>'chitiettintuc','uses'=>'HomeController@chitiettintuc']);
Route::get('tintuc',['as'=>'news','uses'=>'HomeController@news']);
Route::get('timkiem',['as'=>'timkiem','uses'=>'HomeController@timkiem']);
Route::get('autotimkiem',['as'=>'autotimkiem','uses'=>'HomeController@autotimkiem']);
Route::get('sosanh',['as'=>'sosanh','uses'=>'HomeController@sosanh']);
Route::get('listproduct',['as'=>'getlistproduct','uses'=>'HomeController@getlistproduct']);
Route::get('locsanphamtheoram/{id}',['as'=>'locsanphamtheoram','uses'=>'HomeController@locsanphamtheoram']);
Route::get('loaisanpham/{id}',['as'=>'loaisanpham','uses'=>'HomeController@loaisanpham']);
Route::get('loaisp/{id}',['as'=>'loaisp','uses'=>'HomeController@loaisp']);
Route::get('locsanpham/{id}',['as'=>'locsanpham','uses'=>'HomeController@locsanpham']);
Route::get('locsanphamtheomh/{id}',['as'=>'locsanphamtheomh','uses'=>'HomeController@locsanphamtheomh']);
Route::get('chitietsanpham/{id}',['as'=>'chitietsanpham','uses'=>'HomeController@chitietsanpham']);
Route::get('lienhe',['as'=>'getLienhe','uses'=>'HomeController@getLienhe']);
Route::post('lienhe',['as'=>'postLienhe','uses'=>'HomeController@postLienhe']);
Route::get('thongtinthanhtoan',['as'=>'thongtinthanhtoan','uses'=>'HomeController@thongtinthanhtoan']);
Route::post('thongtinthanhtoan',['as'=>'postThanhtoan','uses'=>'HomeController@postThanhtoan']);
Route::get('district',['as'=>'district','uses'=>'HomeController@district']);
Route::get('dathangthanhcong',['as'=>'dathangthanhcong','uses'=>'HomeController@dathangthanhcong']);
Route::get('dangnhap',['as'=>'dangnhap','uses'=>'HomeController@dangnhap']);
Route::post('dangnhap',['as'=>'logindk','uses'=>'HomeController@logindk']);
Route::get('dangky',['as'=>'dangky','uses'=>'HomeController@dangky']);
Route::post('dangky',['as'=>'postdangky','uses'=>'HomeController@postdangky']);
Route::get('facebook',['as'=>'facebook','uses'=>'Auth\SocialController@redirectToProvider']);
Route::get('facebook/callback',['as'=>'facebook/callback','uses'=>'Auth\SocialController@handleProviderCallback']);
Route::get('google',['as'=>'google','uses'=>'Auth\SocialController@googleredirectToProvider']);
Route::get('google/callback',['as'=>'google/callback','uses'=>'Auth\SocialController@googlehandleProviderCallback']);
Route::get('logout',['as' => 'getLogout','uses'=>'Auth\SocialController@getLogout']);

Route::group(['prefix'=>'admin'],function(){
	Route::get('/',['as'=>'admin.getIndex','uses'=>'IndexController@getIndex']);
	Route::get('login',['as' => 'admin.getLogin','uses'=>'LoginController@getLogin']);
	Route::post('login',['as' => 'admin.postLogin','uses'=>'LoginController@postLogin']);
	Route::get('logout',['as' => 'admin.getLogout','uses'=>'IndexController@getLogout']);
	//Route::get('logout',['as' => 'admin.getLogout','uses'=>'LoginController@getLogout']);
	Route::group(['prefix'=>'cate'],function(){
		Route::get('list',['as'=>'admin.cate.getList','uses'=>'CateController@getList']);
		Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'CateController@getAdd']);
		Route::post('add',['as'=>'admin.cate.postAdd','uses'=>'CateController@postAdd']);
		Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'CateController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.cate.postEdit','uses'=>'CateController@postEdit']);
		Route::get('delete/{id}',['as'=>'admin.cate.getDelete','uses'=>'CateController@getDelete']);
		Route::get('published/{id}',['as'=>'admin.cate.postPublished','uses'=>'CateController@postPublished']);
		Route::get('unpublished/{id}',['as'=>'admin.cate.postUnPublished','uses'=>'CateController@postUnPublished']);
	});	
	Route::group(['prefix'=>'product'],function(){
		Route::get('list',['as'=>'admin.product.getList','uses'=>'ProductController@getList']);
		Route::get('add',['as'=>'admin.product.getAdd','uses'=>'ProductController@getAdd']);
		Route::post('add',['as'=>'admin.product.postAdd','uses'=>'ProductController@postAdd']);
		Route::get('edit/{id}',['as'=>'admin.product.getEdit','uses'=>'ProductController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.product.postEdit','uses'=>'ProductController@postEdit']);
		Route::get('delete/{id}',['as'=>'admin.product.getDelete','uses'=>'ProductController@getDelete']);
		Route::get('delete_img/{id}',['as'=>'admin.product.getDelete_img','uses'=>'ProductController@getDelete_img']);
		Route::get('published/{id}',['as'=>'admin.product.getPublished','uses'=>'ProductController@getPublished']);
		Route::get('unpublished/{id}',['as'=>'admin.product.getUnpublished','uses'=>'ProductController@getUnpublished']);
	});	
	Route::group(['prefix'=>'user'],function(){
		Route::get('list',['as'=>'admin.user.getList','uses'=>'UserController@getList']);
		Route::get('listkh',['as'=>'admin.user.getListkh','uses'=>'UserController@getListkh']);
		Route::get('add',['as'=>'admin.user.getAdd','uses'=>'UserController@getAdd']);
		Route::post('add',['as'=>'admin.user.postAdd','uses'=>'UserController@postAdd']);
		Route::get('edit/{id}',['as'=>'admin.user.getEdit','uses'=>'UserController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.user.postEdit','uses'=>'UserController@postEdit']);
		Route::get('delete/{id}',['as'=>'admin.user.getDelete','uses'=>'UserController@getDelete']);
		Route::get('published/{id}',['as'=>'admin.user.getPublished','uses'=>'UserController@getPublished']);
		Route::get('unpublished/{id}',['as'=>'admin.user.getUnpublished','uses'=>'UserController@getUnpublished']);
	});	
	Route::group(['prefix'=>'slide'],function(){
		Route::get('list',['as'=>'admin.slide.getList','uses'=>'SlideController@getList']);
		Route::get('add',['as'=>'admin.slide.getAdd','uses'=>'SlideController@getAdd']);
		Route::post('add',['as'=>'admin.slide.postAdd','uses'=>'SlideController@postAdd']);
		Route::get('edit/{id}',['as'=>'admin.slide.getEdit','uses'=>'SlideController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.slide.postEdit','uses'=>'SlideController@postEdit']);
		Route::get('delete/{id}',['as'=>'admin.slide.getDelete','uses'=>'SlideController@getDelete']);
		Route::get('published/{id}',['as'=>'admin.slide.getPublished','uses'=>'SlideController@getPublished']);
		Route::get('unpublished/{id}',['as'=>'admin.slide.getUnpublished','uses'=>'SlideController@getUnpublished']);
	});	
	Route::group(['prefix'=>'logo'],function(){
		Route::get('list',['as'=>'admin.logo.getList','uses'=>'LogoController@getList']);
		Route::get('add',['as'=>'admin.logo.getAdd','uses'=>'LogoController@getAdd']);
		Route::post('add',['as'=>'admin.logo.postAdd','uses'=>'LogoController@postAdd']);
		Route::get('edit/{id}',['as'=>'admin.logo.getEdit','uses'=>'LogoController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.logo.postEdit','uses'=>'LogoController@postEdit']);
		Route::get('delete/{id}',['as'=>'admin.logo.getDelete','uses'=>'LogoController@getDelete']);
		Route::get('published/{id}',['as'=>'admin.logo.getPublished','uses'=>'LogoController@getPublished']);
		Route::get('unpublished/{id}',['as'=>'admin.logo.getUnpublished','uses'=>'LogoController@getUnpublished']);
	});	
	Route::group(['prefix'=>'tintuc'],function(){
		Route::get('list',['as'=>'admin.tintuc.getList','uses'=>'TintucController@getList']);
		Route::get('add',['as'=>'admin.tintuc.getAdd','uses'=>'TintucController@getAdd']);
		Route::post('add',['as'=>'admin.tintuc.postAdd','uses'=>'TintucController@postAdd']);
		Route::get('edit/{id}',['as'=>'admin.tintuc.getEdit','uses'=>'TintucController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.tintuc.postEdit','uses'=>'TintucController@postEdit']);
		Route::get('delete/{id}',['as'=>'admin.tintuc.getDelete','uses'=>'TintucController@getDelete']);
		Route::get('published/{id}',['as'=>'admin.tintuc.getPublished','uses'=>'TintucController@getPublished']);
		Route::get('unpublished/{id}',['as'=>'admin.tintuc.getUnpublished','uses'=>'TintucController@getUnpublished']);
	});	
	Route::group(['prefix'=>'bill'],function(){
		Route::get('giaodich',['as'=>'admin.bill.getGiaodich','uses'=>'BillController@getGiaodich']);
		Route::get('donhang',['as'=>'admin.bill.getDonhang','uses'=>'BillController@getDonhang']);
		Route::get('donhangcho',['as'=>'admin.bill.getDonhangcho','uses'=>'BillController@getDonhangcho']);
		Route::get('donhanght',['as'=>'admin.bill.getDonhanght','uses'=>'BillController@getDonhanght']);
		Route::get('capnhatcho,{id}',['as'=>'admin.bill.getTtcho','uses'=>'BillController@getTtcho']);
		Route::get('capnhatht,{id}',['as'=>'admin.bill.getTthoanthanh','uses'=>'BillController@getTthoanthanh']);
		Route::get('destroy/{id}',['as'=>'admin.bill.getDestroy','uses'=>'BillController@getDestroy']);
		Route::get('restoresp/{id}',['as'=>'admin.bill.getRestore','uses'=>'BillController@getRestore']);
		Route::get('tthuy',['as'=>'admin.bill.getDonhanghuy','uses'=>'BillController@getDonhanghuy']);
		Route::get('sendmail',['as'=>'admin.bill.getSendmailxl','uses'=>'BillController@getSendmailxl']);
		Route::get('sendmailcho',['as'=>'admin.bill.getSendmailcho','uses'=>'BillController@getSendmailcho']);
		
	});	


});


