<?php

namespace App\Controllers;

use App\Models\registraremploy;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    Public function registro()
    {
        return view('Registro');
    }
    public function empleados()
    {
        return view('Empleados');
    }
    public function CrearEmpleado()
    {
        $nuevo_empleado=array(
            'tipodocumento' => $_POST['tipodocument'],
            'numdocumento' => $_POST['numdocumento'],
            'nombres' => $_POST['name'],
            'apellidos' => $_POST['lastname'],
            'Area' => $_POST['area']
        );

        $nE= new registraremploy();
        $nE->registrar($nuevo_empleado);

        echo ('Empleado registrado correctamente');
    }
}
