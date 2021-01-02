<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkodaADSCreateRequest extends FormRequest
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
                'first_name' => 'required|max:255',
                'last_name' => 'required|max:255',
                'email' => 'required|string|email|max:255',
                'mobile' => 'required|phone_number|regex:/[0-9]{11}/',
                'city' => 'required',
                'car_model' => 'required',
                'kind_request' => 'required',
            ];

    }
}
