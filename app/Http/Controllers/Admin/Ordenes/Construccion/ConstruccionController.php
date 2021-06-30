<?php

namespace App\Http\Controllers\Admin\Ordenes\Construccion;

use App\Http\Controllers\Controller;
use App\Models\Construccion;
use App\Models\Pieza;

class ConstruccionController extends Controller
{
    public function index(){
        $piezas= Pieza::all();
        $construccion = Construccion::orderBy('NroOC','desc')->first();
        $nroOC= $construccion->NroOC;
        $largo = strlen($nroOC);
        $nuevaOC = sprintf("%'0{$largo}d\n", intval($nroOC) + 1);
        return view('admin.ordenes.construccion.confeccionar',compact(['nuevaOC','piezas']));
    }


    public function piezas(){
        
    }
}
