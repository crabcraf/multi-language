<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
//====================== set 'lang file' ==================================
if(!isset($_SESSION["langfile"])){
    $_SESSION["langfile"]="english";
    $lang_file_patch='lang/english-lang.php';
}
else{
    if($_SESSION["langfile"]=='english'){
        $lang_file_patch='lang/english-lang.php';
    }else{
        $lang_file_patch='lang/arabic-lang.php';
    }
}
include("$lang_file_patch");