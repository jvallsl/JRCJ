<?php namespace App\Controllers;

    use App\Models\ProductoModel;
    use App\Models\UserModel;
    use CodeIgniter\Controller;
    use CodeIgniter\Model;

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

        echo view('templates/header', $data);
        echo view('users/overview', $data);
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
            'username' => 'required',
            'email' => 'required',
            'contrasena' => 'required'
        ])){

            $this->model->save([
                'Username' => $this->request->getPost('username'),
                'Email' => $this->request->getPost('email'),
                'Contrasena' => $this->request->getPost('contrasena'),
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
          
                return redirect()->to('/');
    
            }else{
                echo "No existe";
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
}