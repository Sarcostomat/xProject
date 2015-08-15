<?php
session_start();
if(isset($_SESSION["username"])) {
mysql_connect("localhost", "root", "") or die ("keine Verbindung zum Server");
mysql_select_db("webusers") or die ("keine Verbindung zur Datenbank");   
$usersquery  = mysql_query("SELECT * FROM user");
    
?>
<html>
	<head>
		<title>Usertabelle</title>
	</head>
	<body> 
            eingloggt als: <?php echo $_SESSION["username"]." ."; ?>Du kann dich <a href="">hier ausloggen</a><p>        <a href="">Auf das normale Profil schalten.</a></p>           
                <p align="right"><?php
                $timeget = time();
                $datum = date("d.m.Y",$timeget);
                echo $datum; 
                ?>
        <center>                    
            <h3>Usertabelle</h3>
            <pre>____________.....::::::::*U*:._.:*S*:._.:*E*:._.:*R*:._.:*~*:._.:*D*:._.:*A*:._.:*T*:._.:*A*::::::::.....____________</pre>
</center>
            
            
            <?php 
    /*        echo '<table border="1" width= "60%" frame="void" align="center">';
                    echo '<tr>';
                    echo '<th width="5%" height="60">Userid</th>';
                    echo '<th width="15%" >Username</th>';
                    echo '<th width="15%" >Userpasswort</th>';
                    echo '<th width="15%" >Useremail</th>';
                    echo '<th width="5%" >Userrechte</th>';
                    echo '<th width="5%" >Loeschen</th>';
                    echo '<th width="5%" >Aendern</th>';
                    echo '<th width="20%" >Profil</th>';
                    echo '</tr>';
                    WHILE($dsatz = mysql_fetch_assoc($usersquery)){
                    echo '<tr>';
                echo '<td>'.$dsatz['userid'].'</td>';
                echo '<td>'.$dsatz['username'].'</td>';
                echo '<td>'.$dsatz['userpassword'].'</td>';
                echo '<td>'.$dsatz['useremail'].'</td>';
                echo '<td>'.$dsatz['userright'].'</td>';
                echo '<td>'."<a href=delete.php?del=$dsatz[userid]'>delete</a>".'</td>';
                echo '<td>'.'<a href="">edit</a>'.'</td>';
                echo '<td>'.'<a href="">zum Profil</a>'.'</td>';
                echo '</tr>';
                
                }
                echo '</tr>';
                
                echo '</table>';*/
            
            
          echo '<table border="1" width= "60%" frame="void" align="center">';   
          echo '<tr>';
                    echo '<th width="5%" height="60">Userid</th>';
                    echo '<th width="15%" >Username</th>';
                    echo '<th width="15%" >Useremail</th>';
                    echo '<th width="5%" >Userrechte</th>';
                    echo '<th width="5%" >Profil</th>';
                    echo '<th width="5%" >Aendern</th>';
                    echo '<th width="5%" >Loeschen</th>';

                                              echo '</tr>';
          while( $dsatz = mysql_fetch_array($usersquery) ){
          echo '<tr>';
	  echo "<td>$dsatz[userid]</td>";
          echo "<td>$dsatz[username]</td>";
          echo "<td>$dsatz[useremail]</td>";
          echo "<td>$dsatz[userright]</td>";
          echo "<td align='center'><a  href='../admin/databasemanagement/delete.php?del=$dsatz[userid]'>Profil</a></td>";
          echo "<td align='center'><a href='edit.php?edit=$dsatz[userid]'>edit</a></td>";
          echo "<td align='center'><a href='../admin/databasemanagement/delete.php?del=$dsatz[userid]'>delete</a></td>";

          }
          echo '</table>';
            
//----------------------------------------------------------------------
           
 
          
          
          ?>
        <h2 align="center">Information</h2>
        <p align="center">was zu beachten ist...</p>
        
        
        <p align="right">Kontrollpanel des Admins</p>
</body>




        </html>
   <?php                
} else {
?>
Bitte erst einloggen, <a href="../login/index.php">hier</a>.
<?php



}
?>