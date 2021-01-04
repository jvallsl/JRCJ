<?php namespace App\Controllers;

use App\Controllers\Comentario;
use App\Models\ProductoModel;
use App\Models\ValoracionModel;
use CodeIgniter\Controller;

class Producto extends BaseController{

    private $model;
    private $vmodel;
    private $c_controller;


    public function __construct()
    {
        $this->model = new ProductoModel();
        $this->vmodel = new ValoracionModel();
        $this->c_controller = new Comentario();
    }

    public function view($productoId = NULL){
        $data= [
            'producto' => $this->model->getProducto($productoId),
            'valoracion' => $this->vmodel,
            'comentario' => $this->c_controller->obtenerComentariosProducto($productoId)

        ];

        if(empty($data['producto'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('No podemos encontrar el producto: '. $productoId);
        }

        if(session('Username') != null){
            echo view('templates/header_loged');
        }else{
            echo view('templates/header');
        }
        echo view('productos/product_view', $data);
        echo view('templates/footer');
    }

    public function create(){

            if($this->request->getMethod() === 'post' && $this->validate([
                'nombre' => 'required',
                'descripcion' => 'required',
                'imagen' => 'required',
                'seccion' => 'required'
                ])){

                $this->model->save([
                    'Nombre' => $this->request->getPost('nombre'),
                    'Descripcion' => $this->request->getPost('descripcion'),
                    'Imagen' => $this->request->getPost('imagen'),
                    'SeccionId' => $this->request->getPost('seccion')
                ]);

                echo view('productos/success');
            }else{

                echo view('templates/header', ['title' => 'Create a new Product']);
                echo view('productos/productoCreate');
                echo view('templates/footer');
            }
    }

}