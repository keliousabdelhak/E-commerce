<?php
session_start();



	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=projetihm;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
    }
    
   
  
 







//ajouter un produit
 if (isset($_GET['id']) && isset($_POST['qtt']) ) {
 $nbr=ceil($_POST['qtt']);
      if ($nbr>0 && !preg_match("#[a-zA-Z]|,0{0,}[1-9]+|\.(0){0,}[1-9]+#",$_POST['qtt'])) {

 	
           if (($_SESSION['quantite'][$_GET['id']]-$_POST['qtt'])>=0) {
 		
 		
                $req=$bdd->prepare("SELECT * FROM produit ");
                $req->execute(array($_GET['id'] ));
                $res=$req->fetch(); 
  
                $_SESSION['id']=$_GET['id'];
                  if (!array_key_exists($_SESSION['id'], $_SESSION['produit'])) {
                      $_SESSION['produit'][$_SESSION['id']]=$_POST['qtt'];
                     }else{
                     $_SESSION['produit'][$_SESSION['id']]+=$_POST['qtt'];

                     }  
                     $_SESSION['prix']+=($res['prix']*$_POST['qtt']);
                     $_SESSION['quantite'][$_GET['id']]=($_SESSION['quantite'][$_GET['id']]-$_POST['qtt']);}
          header('location:mpanier.php');} 