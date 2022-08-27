<?php


class Controller
{
    // Cargar el modelo
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';

        return new $model();
    }

    // Cargar la vista
    public function view($view, $data = [])
    {
        if (file_exists('app/views/' . $view . '.php'))
        {
            require_once 'app/views/' . $view . '.php';
        }
        else
        {
            die('The view does not exist.');
        }
    }
}