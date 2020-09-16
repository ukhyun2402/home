<?php
    // 게시판 생성할때 부르는
    class Board{
        private $db_name;
        private $board_name;

        public function __construct(String $db_name,String $board_name) {
            $this->db_name = $db_name;
            $this->board_name = $board_name;
        }
    }