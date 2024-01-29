<?php

namespace App\Controllers;
use App\Models\UsuariosModel;

class Usuarios extends BaseController
{
    public function login(): string
    {
        
        $data ['nombre']='Usuarios';
            
        return view ('templates/header').view('login');
    }

    public function crear_usuario(): string
    {

        return view ('templates/header').view('crear_usuario');
    }

    public function agregar(): string
    {
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        $modelo = model(UsuariosModel::class); 

        // Preparamos los datos a guardar:
        $data['nombre'] = $usuario;
        $data['contraseña'] = $password;
        
        // Realizamos la consulta
        $articulos = $modelo->save($data); 

        return view('templates/header') . view('agregar');

    }

    public function comprobar_login() {
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');
        
    
        $model = model('UsuariosModel');
        $usuarioDB = $model->where('nombre', $usuario)->first();
        // var_dump($usuarioDB);exit; para que nos muetre los datos recibidos 
    
        if ($usuarioDB != null && $usuarioDB['contraseña'] == $password) {
            // El usuario y la contraseña son válidos
            return redirect()->to(base_url('Articulos/alta_articulo'));
        } else {
            
        }
    }

    public function enviar_tienda(){
        return redirect()->to('Articulos/alta_articulos');

    }
    
    
}