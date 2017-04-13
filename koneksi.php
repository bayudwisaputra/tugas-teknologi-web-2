<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'tugas';

  $conn = mysql_connect($host, $user, $pass);
  mysql_select_db($db, $conn);
