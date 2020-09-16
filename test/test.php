<?php
  include $_SERVER['DOCUMENT_ROOT']."/class/load_board.php";
  $board = new Load_Board('tmp_board');
  echo $board->check_database();