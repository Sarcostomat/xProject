<?php

include '../connecter/connect.php';

$forumarticleid = $_GET['faid'];

echo $forumarticleid;


$forumArticleQuery = "SELECT * FROM forumarticle WHERE farticleid='$forumarticleid'";
$forumArticleQueryResult = mysql_query($forumArticleQuery);



while($row = mysql_fetch_assoc($forumArticleQueryResult)){
    
    $farticlecategory = $row['farticlecategory'];
    $farticletitle = $row['farticletitle'];
    $farticletext = $row['farticletext'];
    $farticlecreationdate = $row['farticlecreationdate'];
    $farticlecondition = $row['farticlecondition'];
    
    $farticlecreatorid = $row['farticlecreatorid'];
}

$forumArticleCreatorQuery ="SELECT * FROM user WHERE userid='$farticlecreatorid'";
$forumArticleCreatorQueryResult = mysql_query($forumArticleCreatorQuery);

while($facreatorrow = mysql_fetch_assoc($forumArticleCreatorQueryResult)){

    //username, userid ,titel !?,
    
    $username = $facreatorrow['username'];
}

$forumArticleCommentQuery = "SELECT * FROM forumcomments WHERE forumarticleid=$forumarticleid";
$forumArticleCommentQueryResult = mysql_query($forumArticleCommentQuery);



$countCommentsQuery = "SELECT COUNT(*) FROM forumcomments";
$countCommentsQueryResult = mysql_query($countCommentsQuery);
$countComments = mysql_num_rows($countCommentsQueryResult);
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/forumcss.css">
    <title></title>
    </head>
    <body>
        <?php
        
        echo '<div id="fartcilebigbox">';
               echo '<div id="farticlecreatorbox">';
               echo '<div id="farticlecreatorportraitname">';
               echo "$username</div>";
               echo '<div id="farticlecreatorportrait">';
               echo "<img src=\"../filesystem/profiles/".$farticlecreatorid."/".$farticlecreatorid.".jpg\" width=\"125px\" height=\"125px\" >";
               echo '</div>';
               echo '<div id="farticlecreatorportraittitle">';
               echo '| Der Unglaubliche |</div>';
               
               echo '</div>';
               echo '<div id="farticleboxfortitleandtext">';
               echo '<div id="farticletitle">"'.$farticletitle.'"'; //echo $row['newstitle']; 
               echo '</div>';
               echo '<br>';
               echo '<div id="farticletext">"'.$farticletext.'"'; //echo xt']; 
               echo '</p>';
               
               echo '<hr class="hrdesign">';
               echo "Geschrieben von <a href=\"../sidestructure/main.php?id=".$farticlecreatorid."&todo=profile   \">".$username."</a> am ".$farticlecreationdate.""; 
              
               
               echo $countComments." Kommentare dazu";
               
               
               echo '</div>'; 
               echo '</div>'; 
         echo '</div>'; 
               
         echo 'Kommentare';
         
         
         
         echo '<div id="fcommentbigbox">';

         while($comrow = mysql_fetch_array($forumArticleCommentQueryResult)){
             
             
             $commentCreatorQuery = "SELECT * FROM user WHERE userid=".$comrow['commentcreatorid']."";
             $commentCreatorQueryResult = mysql_query($commentCreatorQuery);
             
             
             
             while ($commcreatorrow = mysql_fetch_array($commentCreatorQueryResult)){
                 
             
             
             
         
         
         
         echo '<div id="fcommentbox">';
         
         echo '<div id="fcommentcreatorbox">';
         echo '<div id="fcommentcreatorportraitname">';
         echo $commcreatorrow['username']."</div>";
         echo '<div id="fcommentcreatorportrait">';
         echo "<img src=\"../filesystem/profiles/".$comrow['commentcreatorid']."/".$comrow['commentcreatorid'].".jpg\" width=\"100px\" height=\"100px\" >";
         echo '</div>';
         echo '<div id="commentcreatorportraittitle">';
         echo '| Der Unglaubliche |</div>';
         echo '</div>';
         echo '<div id="fcommenttext">';
         echo $comrow['commenttext'];
         
         echo '</p>';
         echo '<hr class="hrdesign">';
         echo "Geschrieben von <a href=\"../sidestructure/main.php?id=".$comrow['commentcreatorid']."&todo=profile   \">".$commcreatorrow['username']."</a> am ".$comrow['commentdate']; 
         
         
         echo '</div>';           
         echo '</div>';
         
         
         }
         }   
         echo '</div>';
        
         
         
         
         
        
        ?>
        
    </body>
</html>