<?php
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

    }
?>