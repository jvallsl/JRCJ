<?php namespace App\Controllers;

    use App\Models\ProductoModel;
    use App\Models\UserModel;
    use CodeIgniter\Controller;
    use CodeIgniter\Model;
    use DateTime;

class Usuario extends BaseController{

    private $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function index(){

        $data = [
            'usuario' => $this->model->getUsers(),
            'title' => 'Usuarios Registrados',
        ];

        echo view('users/admin_users', $data);
        echo view('templates/footer', $data);
    }

    public function view($userName = NULL){

        $data['usuario'] = $this->model->getUsers($userName);

        if(empty($data['usuario'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $userName);
        }

        $data['title'] = 'Usuario:' . $data['usuario']['Username'];

        echo view('templates/header', $data);
        echo view('users/view', $data);
        echo view('templates/footer', $data);
    }

    public function create(){

        if($this->request->getMethod() === 'post' && $this->validate([
            'usuario' => 'required',
            'email' => 'required',
            'pass' => 'required'
        ])){

            $this->model->save([
                'Username' => $this->request->getPost('usuario'),
                'Email' => $this->request->getPost('email'),
                'Contrasena' => $this->request->getPost('pass'),
            ]);

            echo view('users/success');
        }else{

            echo view('templates/header', ['title' => 'Create a new User']);
            echo view('users/create');
            echo view('templates/footer');
        }

    }

    public function userLogin(){

        if($this->request->getMethod() == 'post'){
            $userName = $_POST['username'];
            $password = $_POST['contrasena'];
            $user = $this->model->login($userName, $password);

            if(isset($user)){
                $this->actualizarExperiencia($user['Valoraciones'], $user['Registro'], $user['UsuarioId'], $user['Experiencia']);
                return redirect()->to('/');
                
            }else{
                echo "El usuario No existe";
            }
        }

    }

    public function perfil(){

        echo view('users/perfil');
    }


    public function userUpdate(){

        if($this->request->getMethod() == 'post'){

            $usuarioId = $_POST['usuarioId'];
            if( isset($_POST['username']) ){

                $nombre = $_POST['username'];
                $this->model->modificar($nombre, $usuarioId);
                return redirect()->to('/usuario/perfil');
            }

            if( isset($_POST['email']) ){

                $email = $_POST['email'];
                $this->model->modificar($email, $usuarioId);
                return redirect()->to('/usuario/perfil');
            }

            if(isset($_POST['contrasena'])){
                $password = $_POST['contrasena'] ;
                $this->model->modificar($password, $usuarioId);
                return redirect()->to('/usuario/perfil');
            }

            if(isset($_POST['estadoUsuario'])){
                $estado = $_POST['estadoUsuario'] ;
                $this->model->modificar($estado, $usuarioId);
                session()->destroy();
                return redirect()->to('/');
            }
        }
    }


    public function comprobarValoraciones($valoraciones){

        if($valoraciones >= 25 and $valoraciones <= 50){
            return 'intermedio';

        }elseif($valoraciones > 50){
            return 'experto';
        }else{
            return;
        }

    }

    public function comprobarAntiguedad($fecha_registro){
        $registro = new DateTime($fecha_registro);
        $fecha_actual = new DateTime('now');
        $antiguedad = $fecha_actual->diff($registro);
        $antiguedad->format('%d');
        if($antiguedad->days >= 181 and $antiguedad->days <= 730 ){
            return 'intermedio';
        }elseif($antiguedad->days > 730) {
            return 'experto';
        }else{
            return;
        }
        
    }

    public function actualizarExperiencia($valoraciones, $fecha_registro, $usuarioId, $experiencia_actual){

        $exp_valoracion = $this->comprobarValoraciones($valoraciones);
        $exp_antiguedad = $this->comprobarAntiguedad($fecha_registro);

        if($experiencia_actual == 'Principiante'){
            if($exp_valoracion == 'intermedio' or $exp_valoracion == 'experto' and $exp_antiguedad == 'intermedio' or $exp_antiguedad == 'experto'){

                $experiencia = 'Intermedio';
                $this->model->actualizarExperienciaModel($experiencia, $usuarioId);
                return;
            }
        }
     
        if($experiencia_actual == 'Intermedio'){
            if($exp_valoracion == 'experto' and $exp_antiguedad == 'experto'){
                $experiencia = 'Experto';
                $this->model->actualizarExperienciaModel($experiencia, $usuarioId);
    
            }
        }

    }
}
