<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStatusRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = $this->user();
        return $user != null && $user->tokenCan('update');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        
        $method = $this->method();
        if ($method == 'PUT'){
            return [
                'name' => ['required'],
                'text' => ['required']
               
            ];
        } 
        // ist ein PATCH Request
        else {
            return [
                'name' => ['sometimes', 'required'],
                'text' => ['sometimes', 'required']
            ];
        }
    }
}