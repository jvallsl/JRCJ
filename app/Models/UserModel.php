<?php namespace App\Models;

    use CodeIgniter\Model;
    use App\Models\ValoracionModel;

    class UserModel extends Model{

        protected $table = 'usuario';
        protected $primaryKey = "UsuarioId";
        protected $allowedFields = ['Username', 'Contrasena', 'Email', 
        'Experiencia', 'Activo', 'Administrador'];

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
                $usuario=[
                    'UsuarioId' => $datos_usuario['UsuarioId'],
                    'Username' => $datos_usuario['Username'],
                    'Email'=> $datos_usuario['Email'],
                    'Registro' => $datos_usuario['Registro'],
                    'Experiencia'=> $datos_usuario['Experiencia'],
                    'Admin'=>$datos_usuario['Administrador']
                ];
                $session = session();
                $session->set($usuario);

                $vmodel = new ValoracionModel();
                $valoraciones = $vmodel->getValoraciones($datos_usuario['UsuarioId']);
                $session->set('valoraciones' , $valoraciones);
    
                return $datos_usuario;
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
    }

?>