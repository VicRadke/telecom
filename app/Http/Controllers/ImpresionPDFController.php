<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenerateCredentialRequest;
use App\Models\Prestador;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ImpresionPDFController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function imprimir(GenerateCredentialRequest $request){
        $id_prestador = $request->input('id_prestador');
        $empleado = Prestador::find($id_prestador);
        $pdf = \PDF::loadView('pdf', ['empleado' => $empleado]);
        return $pdf->download('test.pdf');
    }
}
    


