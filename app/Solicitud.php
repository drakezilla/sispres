<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Gestor;

class Solicitud extends Model {

    protected $table = 'solicitud_hipoteca';
    protected $fillable = ["cliente_id", "gestor_id", "ahorros_aportados", "precio_compra", "fecha_solicitud", "fecha_compra"];
    protected $attributes = ['deleted' => 0, "estado" => "Pend"];

    /**
     * Selecciona un gestor para ser asignado a una solicitud
     * @depends $_ENV["GESTOR_SET_METHOD"]
     * @return int
     */
    public function getGestorSolicitud() {
        switch (env("GESTOR_SET_METHOD")) {
            case "random":
                $gestor = Gestor::all("id")->where("deleted", 0)->random(1)[0]["id"];
                break;
            case "roundrobin":
                $gestor_raw = DB::table("solicitud_hipoteca")
                    ->select(DB::raw("count(*) as cant_solicitudes,gestor_id"))
                    ->join("gestor","solicitud_hipoteca.gestor_id","=","gestor.id")
                    ->groupBy("gestor_id")
                    ->orderBy("cant_solicitudes")
                    ->limit(1)
                    ->get();
                $gestor = $gestor_raw[0]->gestor_id;
                break;
            default:
                $gestor = Gestor::all("id")->where("deleted", 0)->random(1)[0]["id"];
                break;
        }
        return $gestor;
    }

}
