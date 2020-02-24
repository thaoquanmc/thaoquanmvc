<?php
class home extends controller {
    function hi(){
        $teo = $this->model("my_model");
        echo $teo->getSV();
    }
    function show(){
        $arr = [
          "page" => "news",
        ];
        $this->view("home",$arr);
    }
}