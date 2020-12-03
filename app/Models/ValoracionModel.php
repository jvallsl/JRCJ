<?php namespace App\Models;

    use CodeIgniter\Model;

    class ValoracionModel extends Model{

        protected $table = 'valoracion';
        protected $allowedFields = ['Puntuacion', 'UsuarioId', 'ProductoId'];
        protected $returnType = 'array';

        public function getPuntuaciones($productoId){
            $puntuaciones_array= $this->builder()->select('Puntuacion')
            ->where('ProductoId', $productoId)->get()->getResult('array');

            return $puntuaciones_array;
        }


        public function getPuntuacionMedia($productoId){  
            $puntuaciones = $this->getPuntuaciones($productoId);
            $puntuacion = 0;
            $numeroVotos = count($puntuaciones);
            foreach($puntuaciones as $row){
                $puntuacion += array_sum($row);
            }
            
            if($numeroVotos == 0){
                return $puntuacionMedia = 0;
            }
            
            $puntuacionMedia = $puntuacion / $numeroVotos;
         
            return round($puntuacionMedia,1);
        }

        public function getNumeroVotos($productoId){
            $puntuaciones = $this->getPuntuaciones($productoId);
            $numeroVotos = count($puntuaciones);
            return $numeroVotos;
        }

        public function comprobarVotacion($productoId, $usuarioId){

            $votacion= $this->builder()->select('UsuarioId , ProductoId')
            ->where('ProductoId', $productoId)
            ->where('UsuarioId', $usuarioId)
            ->countAllResults();

            return $votacion;

        }

        public function datosAjax($productoId){

            $puntuacion = $this->getPuntuacionMedia($productoId);
            $votaciones = $this->getNumeroVotos($productoId);

            $datos =[
                'puntuacionMedia' => $puntuacion,
                'votaciones' => $votaciones
            ];

            return $datos;

        }


        public function getValoraciones($usuarioId){
            $valoraciones= $this->builder()->select('Puntuacion')
            ->where('UsuarioId', $usuarioId)->countAllResults();

            return $valoraciones;
        }
        
    }