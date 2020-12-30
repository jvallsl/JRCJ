<?php namespace App\Controllers;

use App\Models\ProductoModel;
use App\Models\ValoracionModel;
use App\Controllers\Usuario;

class Home extends BaseController
{
	public function index()
	{
		$model = new ProductoModel();
        $vmodel = new ValoracionModel();
        $data = [
            'producto' => $model->getAllProductos(),
            'valoracion'=>$vmodel
        ];

        if(session('Username') != null){
            echo view('templates/header_loged');
        }else{
            echo view('templates/header');   
        }
        echo view('productos/productos', $data);
        echo view('templates/footer');
    }
    
    
    /*¡¡¡¡¡¡¡   ELIMINAR CUANDO ACABE EL PROYECTO    !!!!!!!!!!!*/

    public function pruebas(){
        $vmodel = new Usuario();
        // $fecha = $vmodel->actualizarExperiencia(session('Valoraciones'), session('Registro'), 
        // session('UsuarioId'),session('Experiencia'));
        

    }

}
