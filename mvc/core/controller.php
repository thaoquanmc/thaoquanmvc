<?php

class controller
{
    public function model($model)
    {
        if (file_exists('./mvc/models/' . $model . '.php')) {
            require_once './mvc/models/' . $model . '.php';
            return new $model;
        }
    }
    public function view($view,$arr){
        if (file_exists('./mvc/views/' . $view . '.php')) {
            require_once './mvc/views/' . $view . '.php';
            return new $view;
        }
    }
}