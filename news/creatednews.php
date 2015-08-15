<?php
if(isset($_POST['newnewssend'])){
}
include '../connecter/connect.php';
$sessionuserid = $_GET['id'];

$newstitle = $_GET['newstitle'];
$newstext = $_GET['newstext'];

$date = date("Y-m-d H:i:s");


$sqlCreation = 'INSERT INTO news (newsid, newstitle, newstext, newsdate, newscreatorid) VALUES ("","'.$newstitle.'","'.$newstext.'","'.$date.'","'.$sessionuserid.'")';
$success = mysql_query($sqlCreation) or die ("Fehler");

if($success == true){
echo 'Der Eintrag war erfolgreich';
echo "<meta http-equiv='refresh' content='0; ../sidestructure/main.php?id=$sessionuserid&todo=news' />";
}

echo 'fehler';
?>
