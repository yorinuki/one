<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidRequest extends FormRequest
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
          'country_id' => 'required | int',
          'continents_id' => 'required | int',
          'difficulty_id' => 'required | int',
          'img' => 'required | max:10240 | mimes:jpg,jpeg,png,gif',
          'area_name' => 'required | max:20',
        ];
    }

    public function attributes()
    {
      return[
        'img' => '画像',
        'area_name' => '場所の詳細'
      ];
    }
}
