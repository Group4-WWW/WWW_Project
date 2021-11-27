<?php
    //Functions for user_login table
    class user{
        private $db;
        private $salt = "SomeSalt";

        function __construct($db_config)
        {
            $this->db = $db_config;
        }

        public function getSalt(){
            $result = $this->salt;
            return $result;
        }

        public function insertUser($username, $password){
            try {
                $result = $this->userExist($username);
                if($result['num'] > 0){
                    return false;
                }
                else{
                    $encryptedPass = md5($password.$username.$this->getSalt());
                    $sql = "INSERT INTO user_login(username,password,privilege) VALUE(:username,:password,0)";
                    $stmnt = $this->db->prepare($sql);
                    $stmnt->bindparam(':username',$username);
                    $stmnt->bindparam(':password',$encryptedPass);
                    $stmnt->execute();
    
                    return true;
                }
            } 
            catch (PDOException $e) {
                echo $e->getMessage();
                
                return false;
            }
        }

        public function userExist($username){
            try {
                $sql = "SELECT count(*) AS num FROM user_login WHERE username = :username";
                $stmnt = $this->db->prepare($sql);
                $stmnt->bindparam(':username',$username);

                $stmnt->execute();
                $result = $stmnt->fetch();
                return $result;
            } 
            catch (PDOException $e) {
                echo $e->getMessage();
                
                return false;
            }
        }

        public function getUserId($username){
            try {
                $sql = "SELECT * FROM user_login WHERE username = :username";
                $stmnt = $this->db->prepare($sql);
                $stmnt->bindparam(':username',$username);
                $stmnt->execute();
                $result = $stmnt->fetch();
                return $result;
            } 
            catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        public function getUserNameById($userId){
            try {
                $sql = "SELECT * FROM user_login WHERE user_id = :userId";
                $stmnt = $this->db->prepare($sql);
                $stmnt->bindparam(':userId',$userId);
                $stmnt->execute();
                $result = $stmnt->fetch();
                return $result;
            } 
            catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        public function getUser($username, $password){
            try {
                $sql = "SELECT * FROM user_login WHERE username = :username AND password = :password";
                $stmnt = $this->db->prepare($sql);
                $stmnt->bindparam(':username',$username);
                $stmnt->bindparam(':password',$password);
                $stmnt->execute();
    
                $result = $stmnt->fetch();
                return $result;
            } 
            catch (PDOException $e) {
                echo $e->getMessage();
                
                return false;
            }
        }
        public function deleteByUserId($userId){
            try {
                $sql = "DELETE FROM user_login WHERE user_id = :userId";
                $stmnt = $this->db->prepare($sql);
                $stmnt->bindparam(':userId',$userId);
                $stmnt->execute();

                return true;
            } 
            catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        public function getUserByUserName($username){
            try {
                $sql = "SELECT * FROM user_login ul INNER JOIN user_info ui on ul.user_id = ui.user_id WHERE username = :username"; 
                $stmnt = $this->db->prepare($sql);
                $stmnt->bindparam(':username',$username);
                $stmnt->execute();
    
                $result = $stmnt->fetch();
                return $result;
            } 
            catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
    }
?>