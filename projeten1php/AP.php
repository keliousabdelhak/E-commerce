<?php session_start ();

if($_POST['quantite']<=0) {
    header ('location:produits.php');
    echo '<script>alert("saisie une quantite qui existe");</script>';
    

}

else{

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=projetihm;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
    }
    
    
    
    
    
    
 
if (isset($_SESSION['panier'])){
 $panier=$_SESSION['panier'];
}else

{

$panier=array();
    
}

$index=count($panier);

$panier[$index]['image']=$_POST['image'];
$panier[$index]['nom']=$_POST['nom'];
$panier[$index]['prix']=$_POST['prix'];
$panier[$index]['quantite']=$_POST['quantite'];
$panier[$index]['id']=$_POST['id'];
$_SESSION['panier']=$panier;
header ('location:panier.php');
}?>