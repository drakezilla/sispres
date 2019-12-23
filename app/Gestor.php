<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestor extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'gestor';
    protected $fillable = ['nombre'];
    protected $attributes = ['deleted' => 0];

}
