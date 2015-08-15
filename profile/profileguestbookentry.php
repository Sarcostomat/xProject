<?php
if(isset($_POST['guestbookentryend'])){
}
include '../connecter/connect.php';


$sessionuserid = $_GET['id'];
$entryreceiverid = $_GET['receiver'];

$entrytext = $_GET['guestbookentrytext'];


$date = date("Y-m-d H:i:s");


$sqlCreation = 'INSERT INTO userguestbook (entryid, entrytext,entryreceiverid, entrycreatorid, entrydate) VALUES ("","'.$entrytext.'","'.$entryreceiverid.'","'.$sessionuserid.'","'.$date.'")';
$success = mysql_query($sqlCreation) or die ("Fehler");

if($success == true){
echo 'Der Eintrag war erfolgreich';
echo "<meta http-equiv='refresh' content='1; ../sidestructure/main.php?id=$entryreceiverid&todo=profile' />";
}else{
    echo 'Der Eintrag konnte leider nicht erstellt werden, versuchen Sie es spaeter wieder!';
}


?>
