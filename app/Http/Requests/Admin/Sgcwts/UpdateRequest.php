<?php

namespace App\Http\Requests\Admin\Sgcwts;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */    public function rules(): array
    {
        return [
            'title'=>'required|string|unique:courses,title,'.$this->sgcwt_id,
            'slug'=>'nullable|string',
            'status_id'=>'required|integer|exists:statuses,id',
            'teacher_id'=>'required|integer|exists:users,id',
        ];
    }
}
