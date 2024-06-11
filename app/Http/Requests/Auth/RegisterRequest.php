<?php

namespace App\Http\Requests\Auth;

use App\Rules\OlderThan18;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'surname' => 'required|string|max:255',
            'name' => 'required|string|max:510',
            'patronymic' => 'required|string|max:510',
            'birthday' => ['required', 'date', new OlderThan18()],
            'email' => 'required|email|max:255|unique:users,email',
            'phone' => 'required|string|max:255|regex:/(8)[0-9]{10}/|unique:users,phone',
            'password' => ['required', 'string', 'max:255', 'min:6'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'surname.required' => 'Поле фамилия обязательно для заполнения',
            'name.required' => 'Поле имя обязательно для заполнения',
            'patronymic.required' => 'Поле отчество обязательно для заполнения',
            'birthday.required' => 'Поле дата рождения обязательно для заполнения',
            'phone.required' => 'Поле телефон рождения обязательно для заполнения',
            'phone.regex' => 'Поле телефон должно быть корректно заполнено',
            'max' => 'Максимальный размер поля 255 символов',
            'full_name.max' => 'Максимальный разме поля 510 символов',
            'phone.unique' => 'Поле телефон должно быть уникальным',
            'email.required' => 'Поле email обязательно для заполнения',
            'email.email' => 'Неверный формат почты',
            'email.unique' => 'Поле email должно быть уникальным',
            'string' => 'Поле должно быть строкой',
            'email.exists' => 'Данный email не зарегистрирован',
            'password.required' => 'Поле пароль обязательно для заполнения',
            'password.string' => 'Поле пароль должно быть строкой',
            'password.min' => 'Минимальный размер пароля 6 символов',
        ];
    }
}
