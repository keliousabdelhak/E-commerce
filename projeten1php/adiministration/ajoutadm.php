<?php
 session_start();
$a1=$_POST['a1'];
$mdp=$_POST['a2'];
$con =mysqli_connect("localhost","root","","projetihm");
$sql ="SELECT * FROM adm WHERE adress='$a1' And mdp='$mdp' ";
$res =$con->query($sql);

if($a1){
    

   if (!$row=$res->fetch_assoc()){
   echo 'erreur';

    
   }else{
include('ajout.php');
     
   }
}



?>