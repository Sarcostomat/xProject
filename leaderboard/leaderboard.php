<?php

include '../connecter/connect.php';

$startcharquery  = mysql_query("SELECT * FROM usercharacter ORDER BY points DESC");

?>
<html>
    <head>
        <title>
        
        </title>
    </head>
    <body>
        <h1 align="center">Rangliste</h1>
<?php

 echo '<table border="1" width= "100%" frame="void" align="center">';   
          echo '<tr>';
               
                    echo '<th width="10%" >Name</th>';
                    echo '<th width="10%" >Klasse</th>';
                    echo '<th width="10%" >Stufe</th>';
                    echo '<th width="10%" >Leben</th>';
                    echo '<th width="10%" >Schaden</th>';
                    echo '<th width="10%" >Verteididung</th>';
                    echo '<th width="10%" >Punkte</th>';
                    echo '<th width="15%"  >Charackterlink</th>';
                    echo '<th width="15%"  >Benutzerprofil</th>';
                   
                    echo '</tr>';
                                              
          while( $dsatz = mysql_fetch_array($startcharquery) ){
          echo '<tr>';
          
          echo "<td align='center'>$dsatz[charname]</td>";
          echo "<td align='center'>$dsatz[class]</td>";
          echo "<td align='center'>$dsatz[level]</td>";
          echo "<td align='center'>$dsatz[hp]</td>";
          echo "<td align='center'>$dsatz[attack]</td>";
          echo "<td align='center'>$dsatz[defense]</td>";
          echo "<td align='center'>$dsatz[points]</td>";
          echo "<td align='center'><a href='../sidestructure/main.php?id=$dsatz[charid]&todo=yourhero'>Held</a></td>";
          echo "<td align='center'><a href='../sidestructure/main.php?id=$dsatz[charid]&todo=profile'>Profil</a></td>";
          }
          echo '</table>';
          
?>
        
    </body>
</html>