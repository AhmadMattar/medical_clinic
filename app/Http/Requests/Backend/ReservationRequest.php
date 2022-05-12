<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
        switch($this->method())
        {
            case 'POST':
            {
                return[
                    'patient_id'        => 'required',
                    'date' =>'required|date|unique:reservations,date',
                ];
            }
            case 'PUT':
            {
                return[
                    'patient_id'        => '',
                    'date'              => 'required|date',
                ];
            }
            case 'PATCH':
            default: break;
        }
    }
}
