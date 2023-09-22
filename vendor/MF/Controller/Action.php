<?php 
namespace MF\Controller;

abstract class Action{
    protected $view;

    public function __construct(){
        $this->view = new \stdClass();
    }
    

    protected function render($view){
        $classAtal = get_class($this);
        $classAtal = str_replace('App\\Controllers\\','',$classAtal);
        $classAtal = strtolower(str_replace('Controller','',$classAtal));
        require_once"../App/Views/".$classAtal."/".$view.".phtml";
    }
}

?>