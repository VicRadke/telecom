<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormularioSolicitudServicioSocial extends Component
{
    /**
     * Create a new component instance.
     * TODO: especifica de modalidades no debe de ser obligatorio
     * TODO: Datos de la esposa no deben de ser obligatorios.
     * TODO: Teléfono de oficina o extensión de emegencia no debe de ser obligatorio.
    
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.formulario-solicitud-servicio-social');
    }
}
