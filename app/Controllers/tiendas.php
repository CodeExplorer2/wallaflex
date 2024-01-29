<?php

namespace App\Controllers;

class Tiendas extends BaseController
{

    public function ver_tienda(): string
    {

        $modelo = new \App\Models\ArticulosModel();



        $imagen = $modelo->orderBy('id', 'DESC')->first();

        return view ('templates/header').view('mostrar_tienda', ['imagen' => $imagen]);
    }

} 