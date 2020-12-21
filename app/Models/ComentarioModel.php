<?php namespace App\Models;

use CodeIgniter\Model;

class ComentarioModel extends Model{

    protected $table = 'comentario';
    protected $primaryKey = 'NumComentario';
    protected $allowedFields = ['Contenido', 'Fecha', 'UsuarioId', 'ProductoId'];
    protected $returnType = "array";


    public function getComentarios($productoId){
        return $this->asArray()
        ->where(['ProductoId' => $productoId])
        ->findAll();
    }

}