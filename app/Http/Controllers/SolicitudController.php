<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Solicitud;
use App\Rules\Solicitud as SolicitudRules;

class SolicitudController extends Controller {

    public function createSolicitud(Request $request) {
        $validator = Validator::make($request->all(), SolicitudRules::$rules, SolicitudRules::$messages);

        if ($validator->fails()) {
            return $validator->errors()->toJson();
        }
        
        $ob_solicitud = new Solicitud;
        $data = $request->all();
        $data["gestor_id"]=$ob_solicitud->getGestorSolicitud();
        
        return Solicitud::create($data);
    }

}
