<?php
    //Create,Read,Update,Delete functions for user_info
    class crud{
        private $db;

        function __construct($db_config)
        {
            $this->db = $db_config;
        }

        public function insertClientRequest($fullname, $email, $message){
            try {
                $sql = "INSERT INTO client_requests(fullname,email,message) VALUE(:fullname,:email,:message)";
                $stmnt = $this->db->prepare($sql);
                $stmnt->bindparam(':fullname',$fullname);
                $stmnt->bindparam(':email',$email);
                $stmnt->bindparam(':message',$message);
                $stmnt->execute();

                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                
                return false;
            }
        }
        public function insertUserInfo($fullname, $email, $userId, $dob, $security1, $security2 ){
            try {
                $sql = "INSERT INTO user_info(fullname,email,user_Id,security_question1,security_question2,dob) VALUE(:fullname,:email,:userId,:security1,:security2,:dob)";
                $stmnt = $this->db->prepare($sql);
                $stmnt->bindparam(':fullname',$fullname);
                $stmnt->bindparam(':email',$email);
                $stmnt->bindparam(':userId',$userId);
                $stmnt->bindparam(':dob',$dob);
                $stmnt->bindparam(':security1',$security1);
                $stmnt->bindparam(':security2',$security2);
                $stmnt->execute();

                return true;
            } 
            catch (PDOException $e) {
                echo $e->getMessage();
                
                return false;
            }
        }

        public function editUserInfo($fullname, $email, $dob, $security1, $security2, $userId){
            try {
                $sql = "UPDATE `user_info` SET `fullname`=:fullname,`email`=:email,`security_question1`=:security1,`security_question2`=:security2,`dob`=:dob WHERE user_id = :userId";
                $stmnt = $this->db->prepare($sql);
                $stmnt->bindparam(':userId',$userId);
                $stmnt->bindparam(':fullname',$fullname);
                $stmnt->bindparam(':email',$email);
                $stmnt->bindparam(':dob',$dob);
                $stmnt->bindparam(':security1',$security1);
                $stmnt->bindparam(':security2',$security2);
                $stmnt->execute();

                return true;
            } 
            catch (PDOException $e) {
                echo $e->getMessage();
                
                return false;
            }
        }
        public function deleteUserById($userId){
            try {
                $sql = "DELETE FROM user_info WHERE user_id = :userId";
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
        public function getUsers(){
            try {
                $sql = "SELECT * FROM `user_info` ui inner join user_login  ul on ui.user_id = ul.user_id";
                $result = $this->db->query($sql);
                return $result;
            } 
            catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

        }
        public function getAllComments(){
            try {
                $sql = "SELECT * FROM client_requests";
                $result = $this->db->query($sql);
                return $result;
            } 
            catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

        }
    }
?>