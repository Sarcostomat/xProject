<?php
if(isset($_SESSION["username"])) { 
echo 'rechts </p>';
echo 'Derzeit angemeldet als '.$_SESSION["username"].' , <a href="../sidestructure/main.php?todo=logout">ausloggen</a> ?';

}else{
    
    
}

?>

