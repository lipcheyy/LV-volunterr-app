<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use function Symfony\Component\Translation\t;

class UpdateRequest extends FormRequest
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
            'name'=>'string',
            'role'=>'integer'
        ];
    }
}