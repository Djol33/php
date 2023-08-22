<?php

namespace App\Model;
use \mysqli;
class ModelRegister extends Conn
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
    public function register($name, $email, $password, $conf_password)
    {
        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $password = htmlspecialchars($password);
        $conf_password = htmlspecialchars($conf_password);
        $sql_query_check_email = "SELECT * FROM korisnici WHERE email=?";
        $st = $this->conn->prepare($sql_query_check_email);
        $st->bind_param("s", $email);
        $st->execute();
        $row = $st->num_rows;
        if ($row === 0) {
            $st->free_result();
            $sql_query = "INSERT INTO korisnici (name, email,password) VALUES (?,?,?)";
            $hashpassword = password_hash($password, PASSWORD_ARGON2I);
            if (isset($this->conn)) {
                if (password_verify($conf_password, $hashpassword)) {
                    $stmt = $this->conn->prepare($sql_query);
                    $stmt->bind_param("sss", $name, $email, $hashpassword);
                    $stmt->execute();
                    $stmt->close();
                    echo "Success";
                }
                else echo "There has been a problem";
            }
            else {
                echo "conn error";
            }
        }
    }

}