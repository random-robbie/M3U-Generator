<?php

include ('config.php');

$name = $_REQUEST["name"];
$link = $_REQUEST["link"];

if ($name == "")
{
	$error = 'Name is Blank<br>
<a href="index.php"><button data-inline="true">Back</button></a> </div>';
} elseif ($link == "")
{
	$error = 'Link is Blank<br>
<a href="index.php"><button data-inline="true">Back</button></a> </div>';
} else {

//Insert In To DB
$insert = $db->prepare("INSERT IGNORE INTO `randomlinks` (`name`, `link`) VALUES (:name , :link)");
$insert->bindValue(':name', $name);
$insert->bindValue(':link', $link);
$insert->execute();
}
?>
<!DOCTYPE html> 
<html> 
<head> 
	<title>Add Link.</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
</head> 

 
<body>
<div data-role="page" id="home" data-theme="a" data-title="RPi Control">
         <div data-role="header">
            <h1>VLC Stream Link</h1>
<div align="center">    
<?php 
if (isset($error)) {
echo $error; 
}
else 
{ 
echo 'Stream has Been Added to the Database <br><br>
<a href="generate.php">Get Play List</a><br><br>
<a href="index.php"><button data-inline="true">Back</button></a>'; 
}
?>

</div>     