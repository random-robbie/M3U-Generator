<?php
include ('config.php');
$myfile = fopen("random.m3u", "w") or die("Unable to open file!");
$mainline = 
"#EXTM3U \n";
 
fwrite($myfile, $mainline);
$grab = $db->prepare("SELECT * FROM `randomlinks`");
$grab->execute();

foreach($grab as $p) {
$name = $p["name"];
$url = $p["link"];

$mainline2 ='#EXTINF:-1,'.$name.'
'.$url.'
';
fwrite($myfile, $mainline2);

	
}
fclose($myfile);

echo file_get_contents("random.m3u");
header("Content-Type: audio/mpegurl");
header("Content-Disposition: attachment; filename='random.m3u'");
?>
