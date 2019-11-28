<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoadoresRequest extends FormRequest
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
            'name' => ['required'
            ],
            'email' =>['required'
            ],
            'd_nascimento' =>['required'
            ],
            'd_cpf' =>['required'
            ],
            'd_endereco' =>['required'
            ],
            'd_telefone' =>['required'
            ],
            'd_peso' =>['required'
            ],
            'tipo_sangue' =>['required'
            ],
            'd_sexo' =>['required'
            ],
            'password' =>['required','min:5'
            ]
        ];
    }
}
