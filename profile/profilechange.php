<?php
//session_start();
if(isset($_SESSION["username"])) {
    
    include '../connecter/connect.php';
    
  $sessionuserid = $_SESSION['userid'];
  $sessionusername = $_SESSION['username'];
  $sessionuseremail = $_SESSION['useremail'];
   
  
?>

<html>
</head>
	<title>Mein Bereich - Profildaten ändern</title>
</head>
<body>
<h2>Profildaten aendern</h2>

<?php
$pathtoprofile ="../filesystem/profiles/".$sessionuserid."/";
$bild = $sessionuserid.".jpg";
echo "<img align =\"middle\" src=\"".$pathtoprofile."".$bild."\" width=\"300\" height\"300\">";
echo "<img align =\"middle\" src=\"".$pathtoprofile."".$bild."\" width=\"125\" height\"125\">";
?>   
<form action="uploadpicture.php" method="post" enctype="multipart/form-data">
    <input type="file" name="dateiupload">
    <input type="submit" name="btnupload">
</form>

	<form action="" method='POST'>
	Neuer Name:         <input type="text" name='newusername' ><br>
        Neue Emailadresse:  <input type="text" name="umail" ><br>      
        
	Neues Passwort:     <input type="newpassword" name="newpw" ><br>
	<!--Passwort wiedeholen:<input type="password" name="pw2" /><br />-->


	<input type="submit" value="Akzeptieren" name="start"/>
	</form>

<?php
/*

//---------------------------------------------------------------------
If($_POST["newusername"]==""){
 
$newusername = $_SESSION["username"];
 
    
}else{

$newusername = $_POST['newusername']; 
}

//-----------------------------------------------
If($_POST["newpw"] == ""){
 
$newPw =$_SESSION["userpassword"];
  
    
}else{

$newPw = $_POST['newpw']; 
}

//-----------------------------------------------
If($_POST["umail"]==""){
    
    
    $newemail = $_SESSION["useremail"];
    
    
    
}  else {
    $newemail = $_POST['umail'];
}

//-----------------------------------------------

*/
if($_POST['start']){
  
    
    
    mysql_query("UPDATE user SET username='$newusername', userpassword='$newPw', useremail='$newemail' WHERE userid='$sessionuserid' ");}

    
    mysql_connect("localhost", "root", "") or die ("keine Verbindung zum Server");
    mysql_select_db("webusers") or die ("keine Verbindung zur Datenbank");
    
    $profildataquery  = mysql_query("SELECT * FROM user WHERE userid='$sessionuserid'");
            WHILE ($row = mysql_fetch_array($profildataquery )){
                $username       = $row['username'];
                $userpassword   = $row['userpassword'];
                $useremail      = $row['useremail'];
                
            }
    $_SESSION["username"] = $username;
    $_SESSION["userpassword"] = $userpassword;
    $_SESSION["useremail"]  = $useremail;
    
  
   
    echo "Sie haben Ihre Daten erfolgreich gespeichert        ";
    ?><a href="../profile/profilechange.php ">Hier gehts wieder zurueck zu Ihrem Profil...</a><?php
    
    
    
}  else {
    

    echo 'fehler';
    
    
}

    ?>

</body>
</html>
<?php


?>
