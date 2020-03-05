<?php

class Db
{
    public $conn;
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "fpt-proj";
    private $result;

    function __construct()
    {
        $this->connect();
    }

    function connect()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->conn, $this->db_name);
        mysqli_query($this->conn, "SET NAMES 'utf8'");
    }

    //Thực thi câu truy vấn
    function execcute($sql)
    {
        $this->result = $this->conn->query($sql);
        return $this->result;
    }

    //Lấy dữ liệu
    function getData()
    {
        if ($this->result) {
            $data = mysqli_fetch_array($this->result);
        } else {
            $data = 0;
        }
        return $data;
    }

}