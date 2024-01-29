<?php

namespace App\Models;
use CodeIgniter\Model;

class ArticulosModel extends Model{
    protected $table = 'articulos';
    protected $allowedFields =['nombre' , 'marca' , 'precio','imagen'];


    public function getArticulos(){
        return $this->findAll();
    }
}
