<?php namespace App\Models;

    use CodeIgniter\Model;

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
    
                return $datos_usuario;
            }else{

                $datos_usuario = null;
                return $datos_usuario;
            }

        
        }
    }

?>