<?php

namespace App\Controllers;
use Config\Services;
use App\Models\UserModel;

class ClubDeRugby extends BaseController
{
    protected $helpers = ['form'];
   
    public function index()
    {
        
        session();
        $validation = \Config\Services::validation();

        //var_dump($validations->listErrors());
        $estructura = view ('clubRugby/header').view('clubRugby/inicio3',['validation' =>$validation]). view ('clubRugby/footer');
        return $estructura;
    }

    public function verListado(){
        $userModel = new UserModel($db);
        $usuarios = $userModel->find();
        $users = array('users'=>$usuarios, 'seleccionar' => 'Todos');

        $estructura = view ('clubRugby/header').view('clubRugby/listadoSocios',$users). view ('clubRugby/footer');
        return $estructura;
        
    }

    public function mostrarDatoSeleccionado(){
        $categoria = $_POST['torneo'];
        $userModel = new UserModel($db);
        if($categoria == 'Todos'){
            $usuarios = $userModel->find();
            $users = array('users'=>$usuarios, 'seleccionar' => $categoria);
        }
        else{
            $usuarios = $userModel->where('categoria',$categoria)->find();
            $users = array('users'=>$usuarios, 'seleccionar' => $categoria);
        }
        
        

        $estructura = view ('clubRugby/header').view('clubRugby/listadoSocios',$users). view ('clubRugby/footer');
        return $estructura;

    }
    
    public function guarda(){
        ///controles y insercion en la bd
        
        $userModel = new UserModel($db);
        $request = \Config\Services::request();
        $enfermedad = $request -> getPostGet('enfermedad');
        $telefono = $request -> getPostGet('telefono');
        $data = array(
            'nombre' => $request -> getPostGet('nombre'),
            'apellido' => $request -> getPostGet('apellido'),
            'dni' => $request -> getPostGet('dni'),
            'fecha' => $request -> getPostGet('fnacjugador'),
            'categoria' => $request -> getPostGet('categoria'),
            'nombretutor' => $request -> getPostGet('nombretutor'),
            'dnitutor' => $request -> getPostGet('dnitutor'),
            'enfermedad' => $enfermedad,
            'direccion' => $request -> getPostGet('direccion'),
            'telefono' => $telefono
        );
         

        
        
        if($this -> validate('socio')){
                    if($userModel -> insert($data)=== false){
                        var_dump($userModel-> errors());
                    }
                    //  $userModel = new UserModel($db);
                    $usuarios = $userModel->find();
                    $users = array('users'=>$usuarios, 'seleccionar' => 'Todos');
        
                    $estructura = view ('clubRugby/header').view('clubRugby/listadoSocios',$users). view ('clubRugby/footer');
                    return $estructura;
        }   
        return redirect() -> back()->withInput();
            
        
        
    }
    

}
