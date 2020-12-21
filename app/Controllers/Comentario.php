<?php namespace App\Controllers;

use App\Models\ComentarioModel;

class Comentario extends BaseController{

    private $model;

    public function __construct()
    {
        $this->model = new ComentarioModel();
    }

    public function obtenerComentariosProducto($productoId){

        $comentarios = $this->model->getComentarios($productoId);
        if(empty($comentarios)){
            $fecha = date('d-m-Y');
            $contenido = [
                "Contenido" => "No existen comentarios todavía.",
                "Fecha" => $fecha
            ];
            $comentarios = [$contenido];
            return $comentarios;
        }
        return $comentarios;
    }
    
    public function guardarComentarios(){

        if ( $this->request->getMethod() == 'post' and session('UsuarioId') != Null){

            $productoId = $this->request->getPost('productoId');
            $url = 'productos/' . $productoId;
            $this->model->save([
                'Contenido' => $this->request->getPost('contenido'),
                'Fecha' => date('Y-m-d'),
                'UsuarioId' => $this->request->getPost('usuarioId'),
                'ProductoId' => $this->request->getPost('productoId'),
            ]);
            return redirect()->to(base_url($url));
        }
    }
}