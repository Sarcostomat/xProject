<?php
require '../websiteConstants/websiteConstantsAsStrings.php';
?>

<html>
    <head>    
        <link rel="stylesheet" href='../css/cssmain.css'>
        <title><?php echo htmlspecialchars($_GET['todo'], ENT_QUOTES, 'UTF-8'); ?></title>
    </head>
    <body>
        <?php
        
        
        
        
        
        
        
        
        ?>
        <div id="header"></div>
        <div id="navigationtop"> <?php include '../navigation/navigationtop.php'; ?>                   </div>
        <table align="center">
            <td valign="top">   <div id="navigationleft"><?php include $navigationLeftLink; ?></div></td>
            <td valign="top">                <div id="mainbody"><?php
            
            
          switch ($_GET['todo'])    
        {
            case   'register':
                include '../registration/register.php';
                break;
            case   'login':
                include '../login/index.php';
                break;              
            case   'logout':
                include '../logout/logout.php';
                break;
            case    'creatednews':
                include '../news/creatednews.php';
                break;                
            case    'yourhero':
                include '../mainbody/yourhero.php';
                break;
            case    'profile':
                include '../profile/profile.php';
                break;
            case    'profilechange':
                include '../profile/profilechange.php';
                break;
            case    'profileguestbookentry':
                include '../profile/profileguestbookentry.php';
                break;
            case    'forum':
                include '../forum/forum.php';
                break;
            case    'forumarticle':
                include '../forum/forumarticle.php';
                break;
            case    'ladder':
                include '../leaderboard/leaderboard.php';
                break;
            default:
                include '../news/news.php';
                break;
            
                    }
          
            
            
  //          include $heroSiteLink; 
            
            
            
            
            
            
            
            ?></div></td>
            <td valign="top">   <div id="navigationright"><?php include $navigationRightLink; ?></div>
                                <div id ="friendlist"><?php include $friendListLink;?></div></td>
        </table>
        <?php // include ''; ?>
        <div id="bottompanel"><?php include './bottom.php'; ?></div>
        
    </body>

    
    
</html>
