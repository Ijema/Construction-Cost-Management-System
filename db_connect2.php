<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'tms_db';

    mysql_connect($host, $user, $pass);
    mysql_select_db($db);

    $user = '';
    $query = mysql_query("SELECT * FROM student") or die (mysql_error());
?>