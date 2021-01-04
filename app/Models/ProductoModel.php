<?php namespace App\Models;

    use CodeIgniter\Model;

class ProductoModel extends Model{

        protected $table = 'producto';
        protected $primaryKey = 'ProductoId';
        protected $allowedFields = ['Nombre', 'Descripcion', 'Imagen', 'SeccionId'];
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

        public function get($ProductoId = null)
        {
            if ($ProductoId === null)
            {
                return $this->findAll();
            }

            return $this->asArray()
                        ->where(['ProductoId' => $ProductoId])
                        ->first();
        }

    
        
         public function updateProduct($id, $name, $description){
            
            $data = [
                'Nombre' => $name];
            $des = [
                'Descripcion' => $description];

            $this->builder()->where('ProductoId', $id);
            $this->builder()->update($data);
            $this->builder()->where('ProductoId', $id);
            $this->builder()->update($des);

        }
        public function eraseProduct($id){
            
            $this->builder()->where('ProductoId',  $id);
            $this->builder()->delete();

        }
        
    }
