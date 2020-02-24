<?php

class db
{
    public $con;
    public $servername = "localhost";
    public $username = "root";
    public $password = "root";
    public $db_name = "myt_db";

    function __construct()
    {

    }
    function connect(){
        $this->con = mysqli_connect($this->servername,$this->username,$this->password);
        mysqli_select_db($this->con,$this->db_name);
        mysqli_query($this->con,"SET NAMES 'utf8'");
    }
}