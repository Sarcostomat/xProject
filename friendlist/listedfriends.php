<?php
if(!isset($_SESSION))
{
session_start();
}


if(isset($_SESSION["username"])) {
    
    
$sessionuserid = $_SESSION["userid"];
    
mysql_connect("localhost", "root", "") or die ("keine Verbindung zum Server");
mysql_select_db("webusers") or die ("keine Verbindung zur Datenbank");

$friendIdQuery  = "SELECT friendid FROM friendtable WHERE fuserid='$sessionuserid'";
$friendIdResult = mysql_query($friendIdQuery) or die("nicht moeglich");
?>

<html>
    
    <head>
        <link rel="stylesheet" href='../css/cssmain.css'>
    </head>

    
    
<?php



while($row = mysql_fetch_array($friendIdResult)){
    
    $id = $row['friendid'];
    
    

    $friendReadingQuery = "SELECT username FROM user WHERE userid='$id'";
    
    $friendIdToNameResult = mysql_query($friendReadingQuery) or die("nicht moeglichsdasd");
    
    while($newRow = mysql_fetch_array($friendIdToNameResult)){
        echo "<div id='friendboxes'>";
        echo $newRow['username'];
        echo "<br/>";
        echo "</div>";
      }  
    
    
    
    
    
}
}


?>
</html>