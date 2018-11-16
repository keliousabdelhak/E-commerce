<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php 
$id=$_POST['id'];
$con =mysqli_connect("localhost","root","","projetihm");
$sql = "DELETE FROM produit WHERE id='$id'";
$res =$con->query($sql);
echo '<h1 style="color:#404040;margin-left:35%;margin-top:200px;">Le produit a était Supprimer . </h1><br>';
echo '<a href="home.php" style="text-decoration: none;margin-left:47%;">Supprimer</a>';


?>
    </body>
</html>