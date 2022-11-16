<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AvailabilityRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // 'start_date ' => 'required|string',
            // 'end_date ' => 'required|string',
            // 'start_time_date ' => 'required',
            // 'start_time ' => 'required|string',
            // 'end_time_date ' => 'required',
            // 'end_time ' => 'required|string',
            'created_at ' => 'nullable',
            'updated_at ' => 'nullable'
        ];
    }
}
