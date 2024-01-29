<?php

namespace App\Controllers;

class inicio extends BaseController
{
    public function index(): string
{
    $session=session();
    $session->set('username','wallpood');

    return view ('templates/header');
}


    
}
