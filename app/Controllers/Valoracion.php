<?php namespace App\Controllers;
    
    use App\Models\ValoracionModel;
    use Exception;
use phpDocumentor\Reflection\Types\Null_;

class Valoracion extends BaseController{

    public function insertarValoracion(){
        $model = new ValoracionModel();

        if( $this->request->getMethod() == 'post' and session('UsuarioId') != Null){
            
            $productoId = $this->request->getPost('productoId');
            $usuarioId = $this->request->getPost('usuarioId');
            $puntuacion = $this->request->getPost('puntuacion');

           $votacion = $model->comprobarVotacion($productoId, $usuarioId);
           if( $votacion == 0){
                try{
                    $model->save([
                        'UsuarioId' => $usuarioId,
                        'ProductoId' => $productoId,
                        'Puntuacion' => $puntuacion
                    ]);

                    echo json_encode('ok');   
                }catch(Exception $e){
                    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
                }
           }else{
            echo json_encode('error');
           }

        }else{
            echo json_encode('session_error');
        }
    }

    public function obtenerValoracion($productoId){
        $model = new ValoracionModel();

        if ($this->request->getMethod() == 'get'){
            $datos = $model->datosAjax($productoId);

            return json_encode($datos);
        }

    }
}