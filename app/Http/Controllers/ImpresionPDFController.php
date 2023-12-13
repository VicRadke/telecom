<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ImpresionPDFController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function imprimir(){
        $pdf = \PDF::loadView('pdf');
        return $pdf->download('test.pdf');
   }
}
    


