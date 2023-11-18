<?php

require_once __DIR__. "/../Config/autoload.php";

class LoginController extends Controller{
    
    use ErrorLoggingTrait;

    protected $login_model;

    public function __construct()
    {
        $this->login_model = new LoginModel();
        $this->validLogin();
        // $this->logouf();
    }

    public function index()
    {
        $this->redirectView('Login', 'index');
    }

    private function validLogin()
    {
        if (isset($_SESSION['painel']) || isset($_SESSION['logado'])) {
            $this->preparePainel();
        }
    }

    private function preparePainel()
    {
        $painel_session = $_SESSION['painel'];

        switch ($painel_session) {
            case 'Coordenacao':
                $this->redirect('/Coordenacao');
                break;

            case 'Aluno':
                $this->redirect('/Estudante');
                break;

            case 'Professor':
                $this->redirect('/Professor');
                break;

            case 'Administrativo':
                $this->redirect('/Administrativo');
                break;
        }
    }

    public function store()
    {
        $login = $this->login_model->validarAcesso($_POST);
        
        if (!is_null($login)) {
            $_SESSION['code'] = $login['id'];
            $_SESSION['nome'] = $login['nome'];
            $_SESSION['painel'] = $login['acesso'];
            $_SESSION['logado'] = true;
        }

        $this->redirect('/Login');
    }
}
