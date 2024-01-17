<?php

namespace App\View\Components;

use App\Models\Prestador;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormEditarEmpleado extends Component
{
    public Prestador $empleado;
    /**
     * Create a new component instance.
     */
    public function __construct(Prestador $empleado)
    {
        $this->empleado = $empleado;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-editar-empleado');
    }
}
