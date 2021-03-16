<?php
    session_start();
    include 'logging.php';
    //echo $_SESSION['path'];
    if(isset($_GET['file'])){
        $a = md5_file($_GET['file']);
        echo '<b>MD5 '.$_GET['file'].':</b>';
        echo '<br>'.$a;
    }
    else{
        $a = md5_file($_SESSION['path']);
        echo '<b>MD5 '.$_SESSION['path'].':</b>';
        echo '<br>'.$a;
    }
?>
