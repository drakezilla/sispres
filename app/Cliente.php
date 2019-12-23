<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cliente';
    protected $fillable = ["nombres","apellidos","email","telefono"];
    protected $attributes = ['deleted' => 0];

}
