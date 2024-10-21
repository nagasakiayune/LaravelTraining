<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // 修正
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'staff_code' => 'required|numeric|digits:4',
            'last_name' => 'required|max:20',
            'first_name' => 'required|max:20',
            'last_name_romaji' => 'required|max:20|alpha_dash',
            'first_name_romaji' => 'required|max:20|alpha_dash',
            'staff_department' =>'required',
            'project_type' => 'max:100',
            'joined_year' =>'required'
        ];
    }

    public function messages(){
        return [
            'staff_code.required' => '社員コードを入力してください。',
            'staff_code.numeric' => '社員コードは社員コードは半角数値で入力してください。',
            'staff_code.digits' => '社員コードは4文字で入力してください。',
            'last_name.max' => '姓は20文字以内で入力してください。',
            'last_name.required' => '姓を入力してください。',
            'first_name.required' => '名を入力してください。',
            'first_name.max' => '名は20文字以内で入力してください。',
            'last_name_romaji.required' => '姓（ローマ字）を入力してください。',
            'last_name_romaji.max' => '姓ローマ字は20文字以内で入力してください。',
            'last_name_romaji.alpha_dash' => '姓ローマ字はアルファベットで入力してください。',
            'first_name_romaji.required' => '名（ローマ字）を入力してください。',
            'first_name_romaji.max' => '名ローマ字は20文字以内で入力してください。',
            'first_name_romaji.alpha_dash' => '名ローマ字はアルファベットで入力してください。',
            'staff_department.required' => '所属を選択してください。',
            'joined_year.required' => '入社年月日を入力してください。',
            'project_type.max' => '案件概要は100文字以内で入力してください。',
        ];
    }
}
