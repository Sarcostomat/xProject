<?php

//session_start();
if(isset($_SESSION["username"])) { 

$sessionuserid = $_SESSION["userid"];
$usernamen = $_SESSION["username"];
require '../connecter/connect.php';


$usersquery  = mysql_query("SELECT * FROM usercharacter WHERE charid='$sessionuserid'");

while($row = mysql_fetch_array($usersquery, MYSQLI_ASSOC)){
    
    //charid`, `charname`, `Klasse`, `Angriff`, `Verteidigung`, `Geschicklichkeit`, `Magie`, `hp`, `mana`, `chaCreator`, `Experience`, `Expforlevelup`
    
  
    //$heroangriff = $row['Angriff'];
    
}

$heroangriff = $_SESSION['angriff'];
    
?>
<html>
	<head>
            <link rel="stylesheet" href='../css/charoverview.css'>
		<title>Mein Bereich</title>
	</head>
	<body>
            
		
                </p>
                <br>
                <table width="500px" border="solid" align="center">
                    <tr><th>Name</th></tr>
                    <tr>
                    <td><div id='charimage'></div></td>
                    </tr>
                    <tr><td>
                            
                            
                            
                            
                            </br>        
                    <center>Verteilbare Punkte: </center>        
                    </br>   
                    <table border="solid" width="350px" align="center">
                    <tr>
                        <th>Attribut</th>
                        <th>Wert</th>
                    </tr>
                    <tr>
                    <td>Angriff</td>
                    <td><?php
                    $heroangriff=$heroangriff+1;
                    
                    echo $heroangriff;?></td>
                    <td><button type="submit">+</button><button type="button">-</button></td>
                    </tr>
                    
                </table>
                
                            
                            
                            
                            
                            
                            
                            </td></tr>
                </table>
                
                   
	</body>
</html>
<?php
} else {
?>
Bitte erst einloggen, <a href="index.php">hier</a>.
<?php

function increasebyone($incresingValue){
    
    return $incresingValue+1;
    
}




}
?>