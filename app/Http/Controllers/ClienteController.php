<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Cliente;
use App\Rules\Cliente as ClienteRules;

class ClienteController extends Controller {

    public function getAllClientes() {
        return Cliente::all();
    }

    public function showCliente(int $id) {
        return Cliente::find($id);
    }

    public function createCliente(Request $request) {

        $validator = Validator::make($request->all(), ClienteRules::$rules, ClienteRules::$messages);

        if ($validator->fails()) {
            return $validator->errors()->toJson();
        }

        return Cliente::create($request->all());
    }

}
