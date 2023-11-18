<?php

require_once __DIR__ . "/../Trait/ErrorLogginTrait.php";

class Route {
    use ErrorLoggingTrait;
    protected  $controller = 'SiteController';
    protected  $method = 'index';
    protected  $parameters = [];

    public function __construct(){
        $this->prepareUrl();
    }

    public function prepareUrl() {
        $url = filter_input(INPUT_GET, 'pag', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $urlParts = !empty($url) ? explode('/', $url) : [];

        if (empty($urlParts)) {            
            return;
        }

        $controllerName = $urlParts[0] . 'Controller';

        $controllerPath = $this->getControllerPath($controllerName);
        
        if (!empty($controllerPath)) {
            $this->controller = $controllerName;

            if (count($urlParts) > 1) {
                array_shift($urlParts);

                $this->method = isset($urlParts[0]) ? $urlParts[0] : 'index';
                array_shift($urlParts);

                $this->parameters = $urlParts;
            } else {
                $this->method = 'index';
            }

            return;
        }
        // // Redirecionar para a página de login
        // $this->controller = 'LoginController';
        // $this->method = 'index';
    }

    public function run()
    {
        if ($this->isRouteValid()) {
            $controller = new $this->controller;
            if (method_exists($controller, $this->method)) {
                call_user_func_array([$controller, $this->method], $this->parameters);
                return;
            }
        }

        // Rota inválida ou método não encontrado
        // Redirecionar para página de erro ou retornar resposta 404

        // Redirecionar para página de erro 404
        // http_response_code(404);
        // include(__DIR__ . '/../../Public/View/404/404.php');
        // exit;
    }

    private function isRouteValid()
    {
        $allowedControllers = [
            'SiteController', 
            'AdminController', 
            'APIController',
            'LoginController',
            'AdministrativoController',
            'ProfileController',
            'ProfissionalController'
        ];
        $allowedMethods = [
            'index', 
            'show', 
            'create', 
            'update', 
            'delete',
            'store'
        ];

        $controllerPath = $this->getControllerPath($this->controller);

        if (file_exists($controllerPath)) {
            return in_array($this->controller, $allowedControllers) && in_array($this->method, $allowedMethods);
        }

        return false;
    }

    private function getControllerPath($controllerName)
    {
        $controllerPaths = [
            __DIR__ . '/../Controller/' . $controllerName . '.php',
            __DIR__ . '/../Controller/Admin/' . $controllerName . '.php',
            __DIR__ . '/../Controller/API/' . $controllerName . '.php'
        ];

        foreach ($controllerPaths as $path) {
            if (file_exists($path)) {
                return $path;
            }
        }

        return '';
    }
}
