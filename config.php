<?php
// Mysql Config
$dbuser = "";  // DATABASE USERNAME
$dbpass = ""; // DATABASE PASSWORD
$dbname = ""; // DATABASE 
$dbhost = "localhost"; // DATABASE HOST

try {
// database connection
$db = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>