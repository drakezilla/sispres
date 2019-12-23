<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Solicitud implements Rule {

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public static $rules = [
        "fecha_solicitud" => "date_format:Y-m-d|after_or_equal:today",
        "fecha_compra" => "date_format:Y-m-d|after_or_equal:today"
    ];
    public static $messages = [
        
        "fecha_solicitud.date_format" => "El formato de la fecha no es valido (AAAA-MM-DD)",
        "fecha_solicitud.after_or_equal" => "La fecha debe ser mayor o igual hoy",
        
        "fecha_compra.date_format" => "El formato de la fecha no es valido (AAAA-MM-DD)",
        "fecha_compra.after_or_equal" => "La fecha debe ser mayor o igual hoy",
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
