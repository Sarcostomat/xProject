<?php
//  session_start(); yolo;
session_destroy();
?>
<html>
<body>
<h3>Du bist nun ausgeloggt.</h3>

Sie landen gleich wieder auf der Startseite.

<meta http-equiv='refresh' content='2; ../sidestructure/main.php?id=$sessionuserid&todo=news' />
</body>
</html>