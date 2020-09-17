<?php
  include $_SERVER['DOCUMENT_ROOT'] . '/class/load_board.php';

  $board = new Load_Board('TMP_BOARD');
  $board->load_data();