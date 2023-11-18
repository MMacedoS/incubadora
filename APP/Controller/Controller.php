<?php
require_once __DIR__ . "/../Config/autoload.php";
require_once __DIR__ . "/../Trait/ErrorLogginTrait.php";

class Controller {
    use ErrorLoggingTrait;

    protected $site_model;
    protected $disciplina_id;
    protected $background;
    protected $app_model;
    protected $url;

    public function __construct() {
        // $this->site_model = new SiteModel();
        // $this->app_model = new AppModel();
        $this->url = ROTA_GERAL;        
    }

    public function viewSite($view) {
        $this->loadView("Site", $view);
    }

    public function redirectView($folder,$view, $page = null) {
        $this->loadView($folder, $view, $page);
    }

    public function background() {
        // $background = $this->app_model->buscabackground($_SESSION['code']);
        // $this->background = $background[0]['status'] ?? 0;
    }

    protected function loadView($folder, $view, $page = null) {
        $viewPath = __DIR__ . "/../../Public/View/{$folder}/{$view}.php";
        if (file_exists($viewPath)) {
            require $viewPath;
        } else {
            $this->view404();
        }
    }

    protected function view404() {
        http_response_code(404);
        require __DIR__ . "/../../Public/View/404/404.php";
        exit;
    }

    public function logouf()
    {
        session_start();
        session_destroy();
        $this->redirect('/Login');
    }

    public function redirect($location)
    {
        $this->logError("aassa"); 
        header('Location: ' . $this->url . $location);
        exit();
    }
}
