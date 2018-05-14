<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txtcate'  => 'required',
            'txtmasp'  => 'required|unique:products,masp',
            'txtname'  => 'required|unique:products,name',
            'txtimage' =>'required|image'
        ];
    }
    public function messages()
    {
        return [
            'txtcate.required'  => 'Vui lòng chọn danh mục !!!',
            'txtmasp.required'  => 'Vui lòng nhập mã SP !!!',
            'txtmasp.unique'  => 'Mã SP đã tồn tại !!!',
            'txtname.required'  => 'Vui lòng nhập tên sản phẩm !!!',
            'txtname.unique'  => 'Tên SP đã tồn tại !!!',
            'txtimage.required' => 'Vui lòng chọn hình ảnh !!!',
            'txtimage.image'    => 'Đây không phải file hình ảnh !!!',
        ];
    }
}
