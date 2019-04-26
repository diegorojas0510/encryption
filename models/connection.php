<?php
    class Connection {
        private $server;
        private $user;
        private $pass;
        private $database;
        private $connection;

        public function __construct (){
            $this->server = "localhost";
            $this->user = "root";
            $this->pass = "";
            $this->database = "message";
            $this->connection = new mysqli($this->server, $this->user, $this->pass, $this->database);
        }

        public function executeQuery ($sql){
            $cont = $this->connection->query($sql);

            return $cont->fetch_all();
        }

        public function executeUpdate ($sql){
            $this->connection->query($sql);
        }

        public function closeConnection (){
            $this->connection->close();
        }
    }
?>