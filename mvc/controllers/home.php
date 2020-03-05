<?php
class Home extends Controller
{
    function default() {
        $this->view("home");
        $this->model("my_model");
    }
}