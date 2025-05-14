<?php
    require('connection.php');
    class Auth{
        private $conn;
        public function __construct(){
            $this->conn = new Connection();
        }

        public function login($email, $password){
            $query = "SELECT * FROM users WHERE email='$email'";
            $result = $this->conn->getConnection()->query($query);
            
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                if(password_verify($password, $row['password'])){
                    
                    echo 'berhasil login';
                    return true;
                } else {
                    echo 'password salah';
                    return false;
                }
                
            } else {
                echo 'gagal login';
                return false;
            }
        }

        public function logout(){
            session_destroy();
            header("location: ../index.php");
        }
    }

    $auth = new Auth();
    $auth->login('admin@email.com', '123');
?>