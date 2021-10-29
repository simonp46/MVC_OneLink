<?php

namespace App\Models;
use CodeIgniter\Model;

class registraremploy extends Model

{
    public function registrar ($datos=array())
    {
    foreach ($datos as $key => $value) {
        $$key=$value;
    }

    $consulta = $this->db->query("INSERT INTO producto (tipodocumento, numdocumento, nombres, apellidos, Area) VALUES ('$tipoducumento', $numdocumento, '$nombres', '$apellidos', '$Area')");
    
    }
}