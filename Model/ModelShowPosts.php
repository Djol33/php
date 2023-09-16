<?php

namespace App\Model;
use mysqli;
class ModelShowPosts extends Conn
{
    public $conn;
    public function __construct(){
        parent::__construct($db ="korisnici", $host="db", $user="userr", $password="userr");

        try{
            $this->conn = new mysqli($host, $user, $password, $db);
        }catch(\mysqli_sql_exception $e){
            echo $e->getMessage();
        }
    }
    public function showPosts($numpage=1){
        $sql_query = "SELECT * FROM posts LIMIT ".($numpage==1? 0 : ($numpage-1)*10) .","."10;" ;
        $stmt = $this->conn->prepare($sql_query);
        $stmt->execute();
        $result = $stmt->get_result();
        $data =  array();
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        $stmt->close();
        $this->conn->close();
        return $data;


    }

}