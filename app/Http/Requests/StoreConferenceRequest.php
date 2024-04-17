<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConferenceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|min:5|max:50',
            'description' => 'required|min:10',
            'conference_date' => 'required|date|after_or_equal:today',
            'address' => 'required|min:5|max:255',
        ];
    }
}
