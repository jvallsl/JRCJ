<?php namespace App\Models;

    use CodeIgniter\Model;
    use App\Models\ValoracionModel;

    class UserModel extends Model{

        protected $table = 'usuario';
        protected $primaryKey = "UsuarioId";
        protected $allowedFields = ['Username', 'Contrasena', 'Email',
        'Registro','Experiencia', 'Activo', 'Administrador'];

        public function getUsers($userName = false){

            if($userName === false){
                return $this->findAll();
            }

            return $this->asArray()
            ->where(['Username' => $userName ])
            ->first();
        }

        public function login($userName, $password){

            $datos_usuario = $this->asArray()
            ->where(['Username' => $userName])
            ->where(['Contrasena' => $password])
            ->first();

            if($datos_usuario['Activo'] == 0){
                return redirect()->to('/');
            }

            if(isset($datos_usuario)){
                $vmodel = new ValoracionModel();
                #Damos formato dd/mm/YYYY a la fecha de registro.
                $fecha_registro = strtotime($datos_usuario['Registro']);
                $fecha_registro = strftime('%d/%m/%Y', $fecha_registro);

                $valoraciones = $vmodel->getValoraciones($datos_usuario['UsuarioId']);

                $usuario=[
                    'UsuarioId' => $datos_usuario['UsuarioId'],
                    'Username' => $datos_usuario['Username'],
                    'Email'=> $datos_usuario['Email'],
                    'Registro' => $fecha_registro,
                    'Experiencia'=> $datos_usuario['Experiencia'],
                    'Admin'=>$datos_usuario['Administrador'],
                    'Valoraciones' =>$valoraciones
                ];
                $session = session();
                $session->set($usuario);

                return $usuario;
            }else{

                $datos_usuario = null;
                return $datos_usuario;
            }


        }

        public function modificar($dato, $usuarioId){

            if($dato == $_POST['username']){
                $nombre = ['Username' => $dato];
                $this->builder()->where('UsuarioId', $usuarioId);
                $this->builder()->update($nombre);
                session()->set('Username', $dato);
                return;
            }

            if($dato == $_POST['email']){
                $email = ['Email' => $dato];
                $this->builder()->where('UsuarioId', $usuarioId);
                $this->builder()->update($email);
                session()->set('Email', $dato);
                return;
            }

            if($dato == $_POST['contrasena']){
                $password = ['Contrasena' => $dato];
                $this->builder()->where('UsuarioId', $usuarioId);
                $this->builder()->update($password);
                return;
            }

            if($dato == $_POST['estadoUsuario']){
                $estado = ['Activo' => $dato];
                $this->builder()->where('UsuarioId', $usuarioId);
                $this->builder()->update($estado);
                return;
            }
        }

        public function actualizarExperienciaModel($experiencia, $usuarioId){
            $nueva_experiencia = ['Experiencia' => $experiencia];
            $this->builder()->where('UsuarioId', $usuarioId);
            $this->builder()->update($nueva_experiencia);
            session()->set('Experiencia', $experiencia);
            return;
        }



        // public function get($UsuarioId = null)
        //   {
        //       if ($UsuarioId === null)
        //       {
        //           return $this->findAll();
        //       }

        //       return $this->asArray()
        //                   ->where(['UsuarioId' => $UsuarioId])
        //                   ->first();
        //   }
    }

?>
