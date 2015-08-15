<?php

$sessionuserid = $_SESSION['userid'];
$entryreceiverid = $_GET['id'];



                    //echo '<form action="../profile/profileguestbookentry.php" id="guestbookentry" action="POST"/>';
                    echo '<form action="../sidestructure/main.php" id="guestbookentry" action="POST"/>';
                    echo "<input type=\"hidden\" value=\"profileguestbookentry\" name=\"todo\">";
                    echo "<input type=\"hidden\" value=\"$sessionuserid\" name=\"id\">";
                    echo "<input type=\"hidden\" value=\"$entryreceiverid\" name=\"receiver\">";
                    echo '<input type="submit" name ="guestbookentryend" id="guestbookentry" value="Text hinterlassen..."/>';
                    echo '</form>';
                    echo '<textarea rows="5" cols="80" name="guestbookentrytext" form="guestbookentry">Hier bitte den Text eingeben...</textarea>';  
                    echo '</br>';
                    
?>
