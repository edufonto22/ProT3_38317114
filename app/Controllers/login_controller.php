<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_Model;

class login_controller extends BaseController
{

    public function index()
    {
        helper(['form','url']);

        $dato['titulo']='login';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

    public function auth()
    {
        $session = session();
        $model = new usuario_Model();


        //traemos los datos del formulario

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        $data = $model->where('email',$email)->first();
        if($data){
            $pass = $data['pass'];
            $ba = $data['baja'];
            if ($ba == 'SI') {
                $session->setFlashdata('msg','usuario dado de baja');
                return redirect()->to('/login'); //'/login_controller' 
            }

            //Se verifican los datos ingresados para iniciar, si cumple la verificación inicia la sesion
            $verify_pass = password_verify($password, $pass);
            //password verify determina los requisitos de configuración de la contraseña

            if($verify_pass){
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE

                ];

                //Si se cumple la verificación, inicia la sesión
                $session->set($ses_data);

                session()->setFlashdata('msg','Bienvenido!');
                  // Redirección según el perfil
    if ($data['perfil_id'] == 1) {
        // Perfil de Administrador
        return redirect()->to('/admin');
    } else if ($data['perfil_id'] == 2) {
        // Perfil de Cliente
        return redirect()->to('/mis_productos');
    } else {
        // Otro caso, redirigí a una página por defecto
        return redirect()->to('/panel');
    }
                //return redirect()->to('/prueba'); //pagina principal
            } else{
                //no paso la validación de la password
                $session->setFlashdata('msg','Password Incorrecta');
                return redirect()->to('/login'); //'/login_controller'
            }

        }else{
             $session->setFlashdata('msg', 'No existe el email o es Incorrecto');
             return redirect()->to('/login'); //'/login_controller'
        }

    }

    public function logout()
    {

        $session = session();
        $session->destroy();
        return redirect()->to('/');

    }

}