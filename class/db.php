<?php
    class db{
        private string $db_name;
        public $conn;

        public function __construct(string $db_name='ukhyun2402') {
            $this->db_name = $db_name;
            $this->conn = new mysqli('210.114.6.140','ukhyun2402','dnr68425',$this->db_name);
            if(mysqli_errno($this->conn)){
                printf("Connect failed: %s\n", mysqli_error($this->conn));
                exit();
            }
        }
    }