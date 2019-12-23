<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Cliente implements Rule {

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public static $rules = [
        "email" => "required|max:100|unique:cliente|email",
        "telefono" => "required|max:13|unique:cliente",
        "nombres" => "required|max:100",
        "apellidos" => "required|max:100"
    ];
    public static $messages = [
        "email.required" => "El correo electronico es requerido",
        "email.max" => "El largo del campo no puede ser superior a 100 caracteres",
        "email.unique" => "Este correo ya ha sido usado",
        "email.email" => "El formato del correo electronico no es valido",
        
        "telefono.required" => "El telefono es requerido",
        "telefono.max" => "El largo del campo no puede ser superior a 13 caracteres",
        "telefono.unique" => "Este telefono ya ha sido usado",
        
        "nombres.required" => "El nombre es requerido",
        "nombres.max" => "El largo del campo no puede ser superior a 100 caracteres",
        
        "apellidos.required" => "El nombre es requerido",
        "apellidos.max" => "El largo del campo no puede ser superior a 100 caracteres",
    ];

    public function __construct() {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value) {
        //
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message() {
        return 'The validation error message.';
    }

}
