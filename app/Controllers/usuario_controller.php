<?php
namespace App\Controllers;
Use App\Models\usuario_Model;
use CodeIgniter\Controller;

class Usuario_controller extends Controller{

    public function __construct(){
        helper(['form','url']);
    }

    public function create() {
        
        $dato['titulo']='Registro';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('front/usuario/registro');
        echo view('front/footer_view');

    }


    public function formValidation(){
              $session = session();
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' =>   'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[3]|max_length[10]'

        ],

    );

     $formModel = new usuario_Model();

        if(!$input) {
            $data['titulo']='Registro';
             echo view('front/head_view',$data);
             echo view('front/navbar_view');
             echo view('back/usuario/registro', ['validation' => $this->validator]);
             echo view('front/footer_view');

        } else{
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'email' => $this->request->getVar('email'),
                'usuario' => $this->request->getVar('usuario'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),

                //password_hash() crea un nuevo hash de contraseña usando un algoritmo de hash de único sentido
            ]);
            //flashdata funciona solo en redirigir la funcion en el controlador en vista de carga.

            $session->setFlashdata('success','Usuario registrado con exito');
            return redirect()->to('/login'); //$this->response->redirect('/login'); 
        }

    }


}