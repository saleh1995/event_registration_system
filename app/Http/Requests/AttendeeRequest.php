<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttendeeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // أو استخدم منطق صلاحياتك إن لزم
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:attendees,email',
            'phone' => 'required|string|max:20',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => __('form.name'),
            'email' => __('form.email'),
            'phone' => __('form.phone'),
        ];
    }
}
