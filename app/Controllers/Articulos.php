<?php

namespace App\Controllers;

use App\Models\ArticulosModel;

class Articulos extends BaseController
{
    protected $table = 'tienda'; //nombre de la tabla de la base de datos
    protected $allwedFields = ['nombre', 'marca','precio']; //Campos  de la tabla que queremos mapear 
    public function alta_articulo(): string
    {
       
        $data['nombre'] = 'Articulos';
        return view ('templates/header').view('alta_articulos');
    }

    public function ver_articulo(): string

    {
        return view ('templates/header').view('zapatillas');
    }


     public function guardar(){
         $data= [];
         $data ['nombre'] = $this-> request -> getPost ('nombre');  
         $data ['marca'] = $this-> request -> getPost ('marca');
         $data ['precio'] = $this-> request -> getPost ('precio');

         $imagen = $this->request->getFile('imagen');
         $nombreimagen = $imagen->getRandomName();
         $imagen->move('../public/imagenes', $nombreimagen);
         if ($imagen === false) {
            // Log the error message
            log_message('error', $imagen->getErrorString());
        }

         $modelo = model(ArticulosModel::class);

         $modelo->save($data);

         $data['guardado'] =true;
         $data['titulo']= 'alta de articulos ';
         return view('templates/header' , $data).view('alta_articulos');

 }   
        public function mostrarTodo(){
            $modelo= model(ArticulosModel::class);
            $data['articulos']= $modelo->findAll();
            $data['titulo']='Listado de artículos';
            return view('templates/header' ,$data).view('articulo');
            var_dump($modelo);exit;
        }

        public function mostrar($id_articulo) {
            $modelo = model(ArticulosModel::class);
            $articulo = $modelo->find($id_articulo);
            $data['titulo'] = 'Detalle de artículo';
            return view('templates/header', $data) . view('articulo', ['articulo' => $articulo]);
        }

        
        
}