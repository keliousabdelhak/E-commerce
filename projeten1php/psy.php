<?php
session_start();
$tlfne=$_POST['tlfn'];
$mdp=$_POST['tmp'];
$con =mysqli_connect("localhost","root","","projetihm");
$sql ="SELECT * FROM membre WHERE numemail='$tlfne' And mdp='$mdp'";
$res =$con->query($sql);



if($tlfne&&$mdp){
    

   if (!$row=$res->fetch_assoc()){
    include('inccorect.php');

    
   }else{
    $_SESSION['id']=$row['id'];
    $_SESSION['nom']=$row['nom'];
    $_SESSION['numemail']=$row['numemail'];
    header("Location:produits.php");
     
   }
}else{include('inccorect.php');
    
}
?>
