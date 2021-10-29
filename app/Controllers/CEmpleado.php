<?php

namespace App\Controllers;

use App\Models\registraremploy;

class RegistroEmp extends BaseController
{
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