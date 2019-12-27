<?php

namespace controllers;

class HomeController
{
    public function __construct()
    {

    }

    protected function loadModel($model, $alias)
    {
        $class = "\models\Book";
        return $this->{$alias} = new $class();
    }

    protected function display($view)
    {
        require_once($_SERVER["DOCUMENT_ROOT"] . "/views/" . $view . ".phtml");
    }

    protected function data($alias, $value)
    {
        $this->{$alias} = $value;
    }

    public function generate($template, array $data = null)
    {
        if (!empty($data)) {
            extract($data);
        }

        ob_start();
        require_once($_SERVER["DOCUMENT_ROOT"] . "/views/" . $template . ".phtml");
        $output = ob_get_contents();

        ob_end_clean();

        return $output;
    }


}