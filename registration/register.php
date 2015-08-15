<html>
</head>
        <link rel="stylesheet" href="../css/log.css">
	<title>Mein Bereich - Registrieren</title>
</head>
<body>
<div id="registerbox">
<h2>Registrieren</h2>
<?php

include '../connecter/connect.php';

if(!isset($_GET["page"])) {
?>

<form action="../sidestructure/main.php?todo=register&page=2" method="post">
    <table align="center"> 
        <tr>
            <td>Username:</td><td><input type="text" name="user" /></td>
        </tr>
        <tr>
            <td>Passwort:</td><td><input type="password" name="pw" /></td>
        </tr>
        <tr>
            <td>Passwort wiedeholen:</td><td><input type="password" name="pw2" /></td>
        </tr>

	
        
        
        

</table>
    <br />
    <input type="submit" value="Registrieren" />
</form>
</div>
<?php


}
?>
<?php
if(isset($_GET["page"])) {
	if($_GET["page"] == "2") {
	$user = strtolower($_POST["user"]);
	$pw = md5($_POST["pw"]);
	$pw2 = md5($_POST["pw2"]);
	
	if($pw != $pw2) {
		echo "Deine Passw�rter stimmen nicht �berein. Bitte wiederhole deine Eingabe....<a href=\"main.php?todo=register\">zurueck</a>";
	} else {
			$control = 0;		
			$abfrage = "SELECT username FROM user WHERE username = '$user'";
			$ergebnis = mysql_query($abfrage)
                        
                        OR die("Error: $abfrage <br>".mysql_error());
			while($row = mysql_fetch_object($ergebnis))
				{
					$control++;
				}	
                                
                                
                                
			if($control != 0) {
				echo "Username schon vergeben. Bitte verwende einen anderen Usernamen....<a href=\"main.php?todo=register\">zurueck</a>";
			} else {
			$userEntry = "INSERT INTO user(username, userpassword)VALUES('$user', '$pw')";
			$userEntryIn = mysql_query($userEntry);
                        
                        /*
                        $herocreation = "INSERT INTO usercharacter(charname, hp, mana, chaCreator, Klasse, Angriff, Geschicklichkeit, Verteidigung, Magie)
                            
                        VALUES('unnamed','100','100','$user', klassenlos, 10, 10, 10,10 )";
                        
                        $eintrag2 = mysql_query($herocreation);
                         */                        
                        
                      
			
			if($userEntryIn == true) {
				echo "Vielen Dank. Du hast dich nun registriert...<a href=\"main.php?todo=login\">Jetzt anmelden</a>";
			} else {
				echo "Fehler im System. Bitte versuche es sp�ter noch einmal...";
			}
			mysql_close();
			}
	}
	}
}
?>
</body>
</html>
