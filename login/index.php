<?php
include '../connecter/connect.php';

//session_start(); yolo; lol; rofl;
$case = 0;

if(!isset($_SESSION["username"]) and !isset($_GET["page"])) {
$case = 0;
$_GET["page"] ="";
}
if($_GET["page"] == "log"){

$user = $_POST["user"];
$passwort = $_POST["passwort"];
//$user = strtolower($_POST["user"]);
//$passwort = md5($_POST["passwort"]);
			$control = 0;
                        
                  	$userQuery = "SELECT * FROM user WHERE username = '$user' AND userpassword = '$passwort'";
			$userQueryResult = mysql_query($userQuery);
			while($row = mysql_fetch_assoc($userQueryResult))
				{
                                        
					$control++;
                                        $usermail = $row['useremail'];
                                        $sessionuserid = $row['userid'];
                                        $userright = $row['userright'];
                                        
				}
                        //Abfrage für den Cha                   
                        $heroQuery = "SELECT * FROM usercharacter WHERE charid='$sessionuserid'";
                        $heroQueryResult = mysql_query($heroQuery);
                        while($rowhero = mysql_fetch_assoc($heroQueryResult))
                              
				{
                                                  $charname=$rowhero ['charname'];  
                                                  $hp=$rowhero ['hp'];  
                                                  $mana=$rowhero ['mana'];  
                                               
				}
if($control != 0) {
$_SESSION["username"] = $user;
$_SESSION["userpassword"] = $passwort;
$_SESSION["useremail"]  = $usermail;
$_SESSION["userid"] =$sessionuserid;
$_SESSION["userright"]=$userright;

$case = 1;
} else {    
$case = 2;
}
}
?>
<html>
<head>
    <link rel="stylesheet" href="../css/log.css">    
	<title>Login</title>
	<?php
	if($case == 1) {
                echo "<meta http-equiv='refresh' content='2; ../sidestructure/main.php?id=$sessionuserid&todo=news' />";
	}
	?>
</head>
<body>
	<?php
	if($case == 0) {
	?>
    <div id="loginbox">
        
        <h2>Anmeldung</h2>
	Bitte melde dich an:<br />
                <form method="post" action="../sidestructure/main.php?todo=login&page=log">    
                <table align="center">
                    <tr>
		<td>Benutzername:</td>
                <td><input type="text" name="user" /></td>
                    </tr>
                    <tr>
                    <td>Passwort:</td>
                    <td><input type="password" name="passwort" /></td>
                    </tr>
                    <br />
                </table>
                    </br>
		<input type="submit" value="Anmelden" />
	</form>
	<p>Noch nicht dabei? <a href="../sidestructure/main.php?todo=register">Jetzt registrieren!</a></p>
    </div>
            <?php
	}
	if($case == 1) {
	?>
	Du hast dich richtig eingeloggt und wirst nun weitergeleitet....
	<?php
	}
	if($case == 2) {
	?>
	Du hast dich nicht eingeloggen koennen, <a href="index.php">back</a>.
	<?php
	}	
	?>
</body>
</html>