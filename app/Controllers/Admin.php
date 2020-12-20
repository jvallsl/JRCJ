<?php namespace App\Controllers;

use App\Models\ProductoModel;
use App\Models\ValoracionModel;

class Admin extends BaseController
{
	public function index()
	{
		
    }

    public function admin_products()
    {
         if(session('Username') != null){
            echo view('templates/header_loged');
        }else{
            echo view('templates/header');   
        }

        $db = new \App\Models\ProductoModel();
        $products = $db->getAllProductos();
        //var_dump($products);
        $data['productos'] = $products; 
        echo view('pages/admin_products', $data);
        echo view('templates/footer');
    }

    public function update()
    {
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $id = substr($actual_link, -1);
        $db = new \App\Models\ProductoModel();
        $product = $db->getProducto($id);
        $data['producto'] = $product; 
        //var_dump($data['producto']);
        return view('pages/updateProducto', $data);
    }
    public function updateProducto()
    {
        $id = $_POST['id'];
        $nombre = $_POST['productName'];
        $descripcion = $_POST['productDescription'];
        $db = new \App\Models\ProductoModel();
        $db->updateProduct($id, $nombre, $descripcion);
        $products = $db->getAllProductos();
        //var_dump($products);
        $data['productos'] = $products;
        return view('pages/admin_products', $data);


    }
    public function erase()
    {
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $id = substr($actual_link, -1);
        

        $db = new \App\Models\ProductoModel();
        $db->eraseProduct($id);
        $products = $db->getAllProductos();
        //var_dump($products);
        $data['productos'] = $products;
        return view('pages/admin_products', $data);


    }

    public function admin_users()
    {
         if(session('Username') != null){
            echo view('templates/header_loged');
        }else{
            echo view('templates/header');   
        }

        $db = new \App\Models\UserModel();
        $usuarios = $db->getUsers();

        //var_dump($usuarios);
        //var_dump($products);
        $data['usuarios'] = $usuarios; 
        echo view('pages/admin_users', $data);
        echo view('templates/footer');
    }


    public function update_user()
    {
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $id = substr($actual_link, -1);
        $db = new \App\Models\UserModel();
        $user = $db->getUser($id);
        $data['usuario'] = $user; 
        //var_dump($data['producto']);
        return view('pages/updateUser', $data);
    }

    public function saveUser()
    {
        $id = $_POST['id'];
        $Experiencia = $_POST['userExp'];
        $Activo = $_POST['userAct'];
        $Administrador = $_POST['userAdmin'];
        $db = new \App\Models\UserModel();
        $db->updateUser($id, $Experiencia, $Activo, $Administrador);
        $users = $db->getUsers();
        //var_dump($products);
        $data['usuarios'] = $users;
        return view('pages/admin_users', $data);


    }

    public function erase_user()
    {
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $id = substr($actual_link, -1);
        

        $db = new \App\Models\UserModel();
        $db->eraseUser($id);
        $users = $db->getUsers();
        //var_dump($products);
        $data['usuarios'] = $users;
        return view('pages/admin_users', $data);

    }
    

}
