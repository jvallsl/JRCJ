<?php namespace App\Models;

    use CodeIgniter\Model;

class ProductoModel extends Model{
        
        protected $table = 'producto';
        protected $primaryKey = 'ProductoId';
        protected $allowedField = ['Nombre', 'Descripcion', 'Imagen', 'SeccionId'];
        protected $returnType = 'object';

        public function getAllProductos(){

            $producto_array = $this->findAll();
            return $producto_array;
         
        }

        public function getProducto($productoId){
            return $this->asArray()
            ->where(['ProductoId' => $productoId])
            ->first();
        }

        public function getProductoId(){

            $productoId = $this->builder()->select('ProductoId')
            ->get()->getResultArray();
            return $productoId;
            
        }

        public function getProductosBySeccion($seccion){
            $productos_seccion = $this
            ->where(['SeccionId'=> $seccion])->findAll();
            return $productos_seccion;
        }
        
    }