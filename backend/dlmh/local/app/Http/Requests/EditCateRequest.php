<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditCateRequest extends FormRequest
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
            'name' => 'unique:category,cate_name,'.$this->segment(4).',cate_id',
            'poster' => 'image'
        ];
    }

    public function messages(){
        return [
            'name.unique' => 'Tên thể loại đã tồn tại!'
        ];
    }
}
