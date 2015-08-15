<?php
include '../connecter/connect.php';

if(!isset($_SESSION))
{
session_start();
}

if(isset($_SESSION["username"])) {

}

$newsQuery  = "SELECT * FROM news ORDER BY newsdate DESC";
$newsQueryResult = mysql_query($newsQuery) or die("nicht moeglich");

?>
<html>
	<head>
                <link rel="stylesheet" href='../css/cssnews.css'>
		<title>News</title>
	</head>
	<body>
		<h1 align="center">Die aktuellen News</h1>
                
                <div id="newsblock">
                    
                    
               <?php 
               
               while($row = mysql_fetch_array($newsQueryResult)){
                    
                        $newsCreatorQuery="SELECT * FROM user WHERE Userid=".$row['newscreatorid']."";
                        $newsCreatorQueryResult=mysql_query($newsCreatorQuery) or die("nicht moeglich");
                   
                        while($creatorrow = mysql_fetch_array($newsCreatorQueryResult)){
                            $newscreatorname = $creatorrow['username'];
                        }
                        
               echo '<div id="newsbox">';
               echo '<div id="newscreatorbox">';
               echo '<div id="newscreatorportraitname">';
               echo "$newscreatorname</div>";
               echo '<div id="newscreatorportrait">';
               echo "<img src=\"../filesystem/profiles/".$row['newscreatorid']."/".$row['newscreatorid'].".jpg\" width=\"125px\" height=\"125\" >";
               echo '</div>';
               echo '<div id="newscreatorportraittitle">';
               echo '| Der Unglaubliche |</div>';
               
               echo '</div>';
               echo '<div id="newsboxfortitleandtext">';
               echo '<div id="newstitle">'; echo $row['newstitle']; echo '</div>';
               echo '<br>';
               echo '<div id="newstext">'; echo $row['newstext']; 
               echo '</p>';
               
               echo '--------------------------------------------------</br>';
               echo '</br>';
               echo $row['newsdate'] ; 
               echo ' | 12 Kommentare';
               echo '</div>'; 
               echo '</div>'; 
               echo '</div>';     
               }
                
               ?>
               </div>
                
                <?php
                
                if(isset($_SESSION["username"])) {
                    if($_SESSION['userright']>3){
                    $sessionuserid = $_SESSION["userid"];
                        
                        
                    echo '<form action="../sidestructure/main.php" id="createnewsform" action="POST"/>';
                    echo 'Newstitel </br>';
                    echo '<input type="text" name="newstitle"/>';
                    echo "<input type=\"hidden\" value=\"creatednews\" name=\"todo\">";
                    echo "<input type=\"hidden\" value=\"$sessionuserid\" name=\"id\">";
                    echo '<input type="submit" name ="newnewssend" value="Erstellen"/>';
                    echo '</form>';
                    echo 'Text</br>';
                    echo '<textarea rows="5" cols="50" name="newstext" form="createnewsform">Hier bitte den Text eingeben...</textarea>';  
                }            
                }
                ?>
        </body>
</html>