<?php


session_start();
if(isset($_SESSION["username"])) { 
echo'<table width= "100%">';
    echo'<th>';
   echo '<td align="center" width="25%"><a href=../sidestructure/main.php?id='.$_SESSION["userid"].'&todo=news >Neuigkeiten</a>';
   echo '</td>';
   echo '<td align="center" width="25%"><a href=../sidestructure/main.php?id='.$_SESSION["userid"].'&todo=forum >Forum</a>';
   echo' </td>';
    echo'<td align="center" width="25%"><a href=../sidestructure/main.php?id='.$_SESSION["userid"].'&todo=register >Registrieren</a>';
   echo '</td>';
   echo '<td align="center" width="25%"><a href=../sidestructure/main.php?id='.$_SESSION["userid"].'&todo=ladder >Bestenliste</a>';
    echo'</td>';
        
   echo '</th>';
    
echo'</table>';
}else{
echo'<table width= "100%">';
    echo'<th>';
   echo '<td align="center" width="25%"><a href=../sidestructure/main.php?todo=news >Neuigkeiten</a>';
   echo '</td>';
   echo '<td align="center" width="25%"><a href=../sidestructure/main.php?todo=forum >Forum</a>';
   echo' </td>';
    echo'<td align="center" width="25%"><a href=../sidestructure/main.php?todo=register >Registrieren</a>';
   echo '</td>';
   echo '<td align="center" width="25%"><a href=../sidestructure/main.php?todo=ladder >Bestenliste</a>';
    echo'</td>';
        
   echo '</th>';
    
echo'</table>';
}
?>
