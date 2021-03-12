<?php
    session_start();
    include 'logging.php';
    if(isset($_GET['file'])){
        $a = md5_file($_GET['file']);
        echo 'MD5 '.$_GET['file'];
        echo '<br>'.$a;
    }
    else{
        $a = md5_file($_SESSION['path']);
        echo 'MD5 '.$_SESSION['path'];
        echo '<br>'.$a;
    }
