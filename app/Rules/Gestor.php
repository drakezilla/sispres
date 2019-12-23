<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Gestor implements Rule {

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public static $rules = [
        "nombre" => "required|max:100|unique:gestor"
    ];
    public static $messages = [
        "nombre.required" => "El nombre es requerido",
        "nombre.max" => "El largo del campo no puede ser superior a 100 caracteres",
        "nombre.unique" =>"El nombre ya esta tomado"
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
