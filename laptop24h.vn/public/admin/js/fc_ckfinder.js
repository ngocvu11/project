function ckeditor(name){
	var editor = CKEDITOR.replace(name,{
	uiColor : '#9AB8F3',
	language:'vi',
 
	filebrowserImageBrowseUrl : baseURL+'/public/admin/js/ckfinder/ckfinder.html?type=Images',
	 
	filebrowserFlashBrowseUrl : baseURL+'/public/admin/js/ckfinder/ckfinder.html?type=Flash',
	 
	filebrowserImageUploadUrl : baseURL+'/public/admin/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
	 
	filebrowserFlashUploadUrl : baseURL+'/public/admin/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
}) ;
}
