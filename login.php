<?php
header('Access-Control-Allow-Origin: *');
$host = 'localhost';
$username = '';
$password = '';
$dbname = 'login';

$conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8mb4", $username, $password);
$username = mysql_real_escape_string($_Post ["username"]);
$password = mysql_real_escape_string(md5 ($_Post ["username"]));
$sql = "SELECT * FROM returning_customers WHERE (username = "$useranme" AND password = "$password")";

$content = $_GET["content"];
$file = uniqid() . ".html";
file_put_contents($file, $content);
$current=file_get_contents($file);
file_put_contents($file, $current, FILE_APPEND | LOCK_EX);
echo $file;

?>