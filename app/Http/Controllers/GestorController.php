<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Gestor;
use App\Rules\Gestor as GestorRules;

class GestorController extends Controller {

    public function getAllGestores() {
        return Gestor::all();
    }

    public function showGestor(int $id) {
        return Gestor::find($id);
    }

    public function createGestor(Request $request) {
        $validator = Validator::make($request->all(), GestorRules::$rules, GestorRules::$messages);

        if ($validator->fails()) {
            return $validator->errors()->toJson();
        }

        return Gestor::create($request->all());
    }

}
