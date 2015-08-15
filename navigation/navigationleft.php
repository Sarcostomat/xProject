<?php
session_start();
if(isset($_SESSION["username"])) {
echo $_SESSION["username"];
echo '</br><a href=../sidestructure/main.php?id='.$_SESSION["userid"].'&todo=news >Neuigkeiten</a>';
echo '</br><a href=../sidestructure/main.php?id='.$_SESSION["userid"].'&todo=yourhero>Ihr Held</a>';
echo '</br><a href=../sidestructure/main.php?id='.$_SESSION["userid"].'&todo=profile>Ihr Profil</a>';
echo '</br><a href=../sidestructure/main.php?todo=ladder>Ladder</a>';

}else{
echo '</br><a href=../sidestructure/main.php?todo=login>Anmelden</a>';
echo '</br><a href=../sidestructure/main.php?todo=news >Neuigkeiten</a>';
    
}
?>
