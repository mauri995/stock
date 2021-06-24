<?php

namespace App\Http\Controllers\Admin\OrdenDeTrabajo\Construccion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfeccionarController extends Controller
{
    public function index(){
        return view('admin.ordenDeTrabajo.construccion.confeccionar');
    }
}
