<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\m_persona;
class C_persona extends Controller{

    public function index()
    {

        $per = new m_persona();
        $datos['clientes']=$per->findAll();
        return view('welcome_message',$datos);
    }

    public function agregar()
    {

        
        return view('agregar');
    }
    public function citas()
    {

        
        return view('consultarCitas');
    }
    public function insertar()
    {
       
        $per = new m_persona();

        $data=[
            'nombre' => $_POST['nombre'],
            'usuario' => $_POST['usuario'],
            'correo' => $_POST['correo'],
            'contraseña' => $_POST['contraseña']
        ];

        $per->insert($data);
        return redirect()->to(base_url());
       
        

        
    }
    public function eliminar($id=null)
    {
        
      

       $per = new m_persona();
        $per->delete($id);

        
        return redirect()->to(base_url());
    }
    public function editar($id = null)
    {

        $per = new m_persona();
        $registro['cliente']= $per->find($id);

      return view('actualizando',$registro);
     


       // return redirect()->to(base_url());
    }
    public function factualizar()
    {

        $per = new m_persona();
        $id= $_POST['id'];
        
        $data=[
            'nombre' => $_POST['nombre'],
            'usuario' => $_POST['usuario'],
            'correo' => $_POST['correo'],
            'contraseña' => $_POST['contraseña']
        ];
        $per->update($id,$data);

        



       return redirect()->to(base_url());
    }





}