<?php namespace App\Controllers;

use App\Models\ProductoModel;
use App\Models\ValoracionModel;

class Seccion extends BaseController{
    
    private $model;
    private $vmodel;

    public function __construct()
    {
        $this->model = new ProductoModel();
        $this->vmodel = new ValoracionModel();
    }

    public function index($seccion = NULL){
        $data = [
            'producto' => $this->model->getProductosBySeccion($seccion),
            'valoracion'=>$this->vmodel
        ];

        echo view('templates/header');
        echo view('productos/productos_seccion', $data);
        echo view('templates/footer');
    }

}