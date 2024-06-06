<?php
    class db{
        private $host= "betbhf5auxtujwdfwbgo-mysql.services.clever-cloud.com";
        private $dbname="betbhf5auxtujwdfwbgo";
        private $user="uwgrzmcslucwwsfd";
        private $password="9tj3Zpq3s0uH3o3YqDjS";
        public function conexion(){
            try{
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
                return $PDO;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
    }

?>
