<?php
$DB_HOST = 'mehlumconsulting.com.mysql';
$DB_USER = 'mehlumconsulting_com';
$DB_PASS = 'Lnex3MV2xjsF4CaALJPeRwi8';
$DB_NAME = 'fashionmekka';
// $DB_PORT = '8889';
$link = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
//$link = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);
if ($link->connect_error) { 
   die('Connect Error ('.$link->connect_errno.') '.$link->connect_error);
}
$link->set_charset('utf8'); 
?>