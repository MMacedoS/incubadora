<?php

class ProfileController extends \Controller{
    use ErrorLoggingTrait;
    protected $app_model;

    public function __construct() {
        // $this->validPainel();
        $this->app_model =  new AppModel();       
    }

    private function validPainel() {        
        if ($_SESSION['painel'] != 'Administrativo' && $_SESSION['painel'] != 'financeiro') {   
            session_start();
            session_destroy();            
            return header('Location: '.$this->url.'/Login');            
        }       
    }

    public function index() 
    {                
        $this->redirectView('Administrativo','index','dashboard');
    }  

    public function update() 
    {                
        return json_encode("sucesso");
    }  

    public function changeStatusBg($code) {
        $bg = $this->app_model->changeStatusBg($code);
        return $bg;
    }

    public function changeStatusBgGet($code) {
        $bg = $this->app_model->changeStatusBg($code);
        echo json_encode($bg);
    }
      
}