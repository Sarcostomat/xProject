
<?php
//session_start();
if(isset($_SESSION["username"])) {
require '../connecter/connect.php';

$userid = $_GET['id'];
//$userfriendsqueryid = mysql_query("SELECT * FROM friends1 WHERE fuserid=".$userid." ");
$userquery ="SELECT * FROM user WHERE userid='$userid' ";
$userguestbookquery ="";

$userresult = mysql_query($userquery);
			while($row = mysql_fetch_assoc($userresult)){
                            
                            $username = $row['username'];
                            
                        }
                        



$sessionusername = $_SESSION["username"];
$sessionuserid = $_SESSION["userid"];

$pictureactivated = 1;


?>
<html>
	<head>
                <link rel="stylesheet" href='../css/profileview.css'>
                <title>Profil</title>
	</head>
	<body>  
            <?php if($_SESSION["userright"] == 5){ ?> <a href="/PhpProject2/admin/adminviewdb.php">Admin</a><?php }?>
            <table width="700px" border="solid" align="center">
                <tr>
                    <td><h1><?php echo  "Das Profil von ".$username."" ?></h1></td>
                </tr>
                    <td>
                    <table border="solid" width="675px" align="center">
                    <tr>
                    <td align="middle" width="50%">
                        
                        <?php
                        if($pictureactivated == 0){
                            
                            echo '<div id="profilepicture">Es wurde noch kein Profilbild gesetzt</div>';
                          
                        }
                        $pathtoprofile ="../filesystem/profiles/".$userid."/";
                        $bild = $userid.".jpg";
                        echo "<img align =\"middle\" src=\"".$pathtoprofile."".$bild."\" width=\"300\" height\"300\">";
                       
                        ?>
                        
                        
                    </td>
                    <td>
                        <table width="300">
                            <tr>
                                <td>Name</td>
                                <td>Unbekannt</td>
                            </tr>
                            <tr>
                                <td>Cha</td>
                                <td>Unbekannt</td>
                            </tr>
                            <tr>
                                <td>Chalevel</td>
                                <td>Unbekannt</td>
                            </tr>
                            <tr>
                                <td>Mitglied seit</td>
                                <td>Unbekannt</td>
                            </tr>
                            
                        </table>
                        
                        
                        
                        
                        
                        
                        
                        
                    </td>
                    </tr>
            
                    
                    </table>
                    
                </td></tr>
            <tr>
                <td align="middle">
                    <div id="profiletextbox">
                    Hier kommt noch ein Text hin, den die User sich zu ihrem Profil hinzufuegen koennen.</p>
                    
                    Entweder eine Sigantur oder eine Art Zitat.</P>
                    
                    Wird aber erst noch in einer CSS eine Box erstellt, damit diese die richtigen Werte hat,
                    </div>
                    
                </td>
            </tr>        
            </table>    
            </br>
            
            <?php            
            include 'profileawards.php';

            ?>
            
            
            
		
                <?php  if($_GET['id']== $sessionuserid){ 
                
                                
                    
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF']."?todo=profilechange"  ?>" method="post">
                <input type="submit" Value="Profil bearbeiten">
                </form>
                <br>
                <a href="/PhpProject2/news/news.php">zu den news    </a>
                <a href=../sidestructure/main.php?id=$userid&todo=profilechange>Ihr Profil aendern</a></p>
                
                <?php 
                }
                include 'profileguestbook.php';
                
                
                echo 'Als Freund hinzufuegen.';
                echo 'FREUNDE:';
                ?>                
		
	</body>
</html>
<?php
} else {
?>
Bitte erst einloggen, <a href="../login/index.php">hier</a>.
<?php
}


?>