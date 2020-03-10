<?php
/**
 * Created by PhpStorm.
 * User: ad
 * Date: 26.02.2020
 * Time: 8:56
 */
require_once "../app/functions.php";
$link=connect();
$login='';
$pas='';
if(isset($_POST['login'])) $login=$_POST['login'];
if(isset($_POST['password'])) $pas=$_POST['password'];


if( check($login,$pas,$link)>0){ echo "Accessss";}
else echo "<script> window.location='registr.html' </script>";