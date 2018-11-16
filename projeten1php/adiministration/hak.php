<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
$nom=$_POST['nom'];
$prix=$_POST['prix'];
$adr=$_FILES['haqou']['name'] ;
$chemin="images/".$adr;
echo '<h1 style="color:#404040;margin-left:35%;margin-top:100px;">Ce produit a était ajouter . </h1>';
echo '<img src="'.$chemin.'" style="width:150px;margin-left:42%"> <br><br>';
echo '<h2 style="display:inline;color:#404040;margin-left:42%"> Produit </h2>'.$nom.'<br><br>';
echo '<h2 style="display:inline;color:#404040;margin-left:42%"> Prix </h2>'.$prix.'<br><br><br>' ;
    echo '<a href="ajout.php" style="text-decoration: none;margin-left:46%;">Ajouter</a>';
$con =mysqli_connect("localhost","root","","projetihm");

$insertion ="INSERT INTO produit(nom,prix,image) VALUES('$nom','$prix','$chemin')";
$res =$con->query($insertion);

?>
    </body>
</html>

