<?php

if(isset($_GET['lang']) && $_GET['lang']=='en'){
    unset($_SESSION['lang']);
    $_SESSION['lang']=true;
    $_SESSION['lang']='en';
//    header("Location:branding.php");
}

if(isset($_GET['lang']) && $_GET['lang']=='pt'){
    unset($_SESSION['lang']);
    $_SESSION['lang']=true;
    $_SESSION['lang']='pt';
//    header("Location:branding.php");
}

if(!isset($_GET['lang']) && !isset($_SESSION['lang'])){
    include_once('lang/en.php');
}

if(isset($_SESSION['lang']) && $_SESSION['lang']=='en'){
    include_once('lang/en.php');
}

if(isset($_SESSION['lang']) && $_SESSION['lang']=='pt'){
    include_once('lang/pt.php');
}

?>

