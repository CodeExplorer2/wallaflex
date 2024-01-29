<?php

namespace App\Models;
use CodeIgniter\Model;



class UsuariosModel extends Model{
    protected $table = 'usuario';
    protected $allowedFields =[ 'nombre' , 'contraseña'];

    
}

// $data['id']='id';
// $data['nombre']='nombre';
// $data['constraseña']='contraseña';

// $usuario = $usuario->save($datos);

