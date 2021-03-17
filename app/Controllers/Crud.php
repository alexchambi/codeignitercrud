<?php

namespace App\Controllers;

use  App\Models\mCrud;

class Crud extends BaseController
{
	public function index()
	{
		$Crud = new mCrud();

		$datos = $Crud->mostrarDatos();
		$mensaje = session('mensaje');

		$data = [
			'datos' => $datos,
			'mensaje' => $mensaje
		];
		return view('listado', $data);
	}

	public function registrar()
	{
		$datos = [
			'nombre' => $_POST['nombre'],
			'apellido' => $_POST['apellido'],
			'email' => $_POST['email']
		];

		$Crud = new mCrud();
		$result = $Crud->insertar($datos);

		if ($result > 0) {
			return redirect()->to(base_url() . '/')->with('mensaje', '0');
		} else {
			return redirect()->to(base_url() . '/')->with('mensaje', '1');
		}
	}

	public function actualizar()
	{
		$datos = [
			"nombre" => $_POST['nombre'],
			"apellido" => $_POST['apellido'],
			"email" => $_POST['email']
		];

		$idpersona = $_POST['idpersona'];

		$Crud = new mCrud();

		$result = $Crud->actualizar($datos, $idpersona);

		if ($result) {
			return redirect()->to(base_url() . '/')->with('mensaje', '2');
		} else {
			return redirect()->to(base_url() . '/')->with('mensaje', '3');
		}
	}

	public function getDatos($idpersona)
	{
		$data =  [
			'idpersona' => $idpersona
		];

		$Crud = new mCrud();
		$result = $Crud->getDatos($data);

		$datos = [
			'datos' => $result
		];

		return view('actualizar', $datos);
	}

	public function eliminar($idpersona){
		$data = [
			'idpersona' => $idpersona
		];

		$Crud = new mCrud();
		$result = $Crud->eliminar($data);

		if($result){
			return redirect()->to(base_url() . '/')->with('mensaje', '4');
		}
		else{
			return redirect()->to(base_url() . '/')->with('mensaje', '5');
		}		
	}
}
