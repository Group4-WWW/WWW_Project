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
                    $privilege = 0;
                    $attemptsLeft = 5;
                    $sql = "INSERT INTO user_login(username,password,privilege,attempts_left) VALUE(:username,:password,:privilege,:attemptsLeft)";
                    $stmnt = $this->db->prepare($sql);
                    $stmnt->bindparam(':username',$username);
                    $stmnt->bindparam(':password',$encryptedPass);
                    $stmnt->bindparam(':privilege',$privilege);
                    $stmnt->bindparam(':attemptsLeft',$attemptsLeft);
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
                $result = $this->userExist($username);
                if($result['num'] > 0){
                    $result = $this->correctCredentials($username,$password);
                    if(!$result){
                        $result = $this->getUserAttemptsLeft($username);
                        if($result['attempts_left'] > 0){
                            $result = $this->updateUserAttempts($username,$result['attempts_left']);
                        }
                        else{
                            return false;
                        }
                    }
                    else{
                        $attempts = $this->getUserAttemptsLeft($username);
                        if($attempts['attempts_left']>0){
                            return $result;
                        }
                        else{
                            return false;
                        }
                    }
                }
                else{
                    return false;
                }
            } 
            catch (PDOException $e) {
                echo $e->getMessage();
                
                return false;
            }
        }
        function correctCredentials($username,$password){
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
        public function getUserAttemptsLeft($username){
            try {
                $sql = "SELECT attempts_left FROM user_login WHERE username = :username";
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
        public function updateUserAttempts($username,$attemptsLeft){
            try {
                $decrement = $attemptsLeft - 1;
                $sql = "UPDATE `user_login` SET `attempts_left` = :decrement WHERE username = :username";
                $stmnt = $this->db->prepare($sql);
                $stmnt->bindparam(':username',$username);
                $stmnt->bindparam(':decrement',$decrement);
                $stmnt->execute();

                return true;
            } 
            catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        public function validateUserSecurityQuestions($username,$security1,$security2){
            try {
                $result = $this->userExist($username);
                if($result['num'] > 0){
                    $result = $this->validateSecuityQuestions($security1,$security2);
                    if(!$result){
                        return false;
                    }
                    else{
                        return true;
                    }
                }
                else{
                    return false;
                }
            }
            catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
                
        }
        function validateSecuityQuestions($security1,$security2){
            try {
                $sql = "SELECT*FROM user_info WHERE security_question1 = :security1 AND security_question2 = :security2";
                $stmnt = $this->db->prepare($sql);
                $stmnt->bindparam(':security1',$security1);
                $stmnt->bindparam(':security2',$security2);
                $stmnt->execute();

                $result = $stmnt->fetch();
                if(!empty($result)){
                    return true;
                }
                else{
                    return false;
                }
                
            }
            catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        public function updatePass($username,$password){
            try {
                $result = $this->userExist($username);
                if($result['num'] > 0){
                    $attemptsLeft = 5;
                    $encryptedPass = md5($password.$username.$this->getSalt());
                    $sql = "UPDATE `user_login` SET `password` = :encryptedPass, `attempts_left` = :attemptsLeft WHERE username = :username";
                    $stmnt = $this->db->prepare($sql);
                    $stmnt->bindparam(':username',$username);
                    $stmnt->bindparam(':encryptedPass',$encryptedPass);
                    $stmnt->bindparam(':attemptsLeft',$attemptsLeft);
                    $stmnt->execute();

                    return true;
                }
                else{
                    return false;
                }

            } 
            catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
    }
?>