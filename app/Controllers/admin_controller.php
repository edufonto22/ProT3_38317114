<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_Model;

class admin_controller extends BaseController
{
    public function index()
    {
        $session = session();
        if ($session->perfil_id != 1) {
            return redirect()->to('/panel');
        }

        $model = new usuario_Model();
        $data['usuarios'] = $model->findAll();
        $data['titulo'] = 'Panel de Administración';

        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/admin/lista_usuarios', $data);
        echo view('front/footer_view');
    }

    public function editar($id)
    {
        $session = session();
        if ($session->perfil_id != 1) {
            return redirect()->to('/panel');
        }

        $model = new usuario_Model();
        $data['usuario'] = $model->find($id);
        $data['titulo'] = 'Editar Usuario';

        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/admin/editar_usuario', $data);
        echo view('front/footer_view');
    }

    public function actualizar()
    {
        $model = new usuario_Model();
        $id = $this->request->getPost('id_usuario');

        $data = [
            'nombre'    => $this->request->getPost('nombre'),
            'apellido'  => $this->request->getPost('apellido'),
            'email'     => $this->request->getPost('email'),
            'usuario'   => $this->request->getPost('usuario'),
            'perfil_id' => $this->request->getPost('perfil_id'),
            'baja'      => $this->request->getPost('baja')
        ];

        $model->update($id, $data);
        return redirect()->to('/admin')->with('success', 'Usuario actualizado correctamente');
    }

    public function eliminar($id)
    {
        $model = new usuario_Model();
        $model->delete($id);
        return redirect()->to('/admin')->with('success', 'Usuario eliminado correctamente');
    }
}
