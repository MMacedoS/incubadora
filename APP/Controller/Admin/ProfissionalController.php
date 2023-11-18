<?php

class ProfissionalController extends Controller {

    public function index() 
    {                
        $this->redirectView('Administrativo','index','profissional');
    }


}