<?php

namespace App\Models;

use CodeIgniter\Model;

class mCrud extends Model
{
    public function mostrarDatos()
    {
        $Nombres = $this->db->query('SELECT *FROM persona');
        return $Nombres->getResult();
    }

    public function insertar($datos)
    {
        $Nombres = $this->db->table('persona');
        $Nombres->insert($datos);

        return $this->db->insertID();
    }

    public function getDatos($data)
    {
        $Nombres = $this->db->table('persona');
        $Nombres->where($data);

        return $Nombres->get()->getResultArray();
    }

    public function actualizar($data, $idpersona)
    {
        $Nombres = $this->db->table('persona');
        $Nombres->set($data);
        $Nombres->where('idpersona', $idpersona);

        return $Nombres->update();
    }

    public function eliminar($data)
    {
        $Nombres = $this->db->table('persona');
        $Nombres->where('idpersona', $data);

        return $Nombres->delete();
    }
}
