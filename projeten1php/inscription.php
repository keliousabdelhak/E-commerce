<?php 
session_start();
$mdp=$_POST['mp'];
$tlfne=$_POST['nte'];
$nom=$_POST['ncpl'];
$serveur="localhost";
$login="root";
$pass="";

 if ($mdp&&$tlfne&&preg_match("/^[a-zA-Z -]+$/",$nom)){
 $dbb=new PDO("mysql:host=$serveur;dbname=projetihm",$login,$pass); 
     
 $insertion ="INSERT INTO membre(nom,numemail,mdp) VALUES('$nom','$tlfne','$mdp')";
 $dbb->exec($insertion);
   echo 'enregistre';
     
     
}else{
     header("Location:connexion1.php");
/*include('connexion1.php');*/
}



?>



<?php
session_start();
$mdp=$_POST['mp'];
$tlfne=$_POST['nte'];
$con =mysqli_connect("localhost","root","","projetihm");
$sql ="SELECT * FROM membre WHERE numemail='$tlfne'";
$res =$con->query($sql);
if (!$row=$res->fetch_assoc()){
    include('inccorect.php');
 
    
}else{
    $_SESSION['id']=$row['id'];
    $_SESSION['nom']=$row['nom'];
    $_SESSION['numemail']=$row['numemail'];
    header("Location:produits.php");
     
}

?>
