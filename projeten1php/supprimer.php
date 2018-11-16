<?php
session_start();
$index=$_GET['index']; 

 $panier=$_SESSION['panier'];
unset($panier[$index]);

 $_SESSION['panier']=$panier;
  
header('location:panier.php');

  ?>
 