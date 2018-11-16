<?php
 session_start();   
    
?>
<!DOCTYPE html>
<html>
<head>
	 <title>SlimRed</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="jquery-3.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
     <?php  
    
    
    if(isset($_SESSION['id'])){
    echo' <script>
        function ap()
{
    
confirm("Voulez vous passer la commande ?");
}
        </script>  ' ; }else { 
    
      echo' <script>
        function ap()
{
    
alert("Connectez vous s\'il vous plait ");
}
        </script>  ' ;
    
    }
            
            
        
        
        
        
        ?>
  
  <style>
      body{
           background-color: #EFEFEF;
      }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
        border: none;
         background-color: #2f4f4f;
      margin-bottom: 0;
      border-radius: 0;
       
        
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
 /*    width: 100%; Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
      
.div1 { 
width:200px; 
height:200px; 
display:inline-block; 
border: 1px solid black; 
background-color:beige; 
text-align:center; 
} 
      #pos{
          background-color: #DFDFDF;
          width: 840px;
          position: absolute;
          top: 72px;
          right: 150px;
          height: 1500px;
          border-radius: 4px;
          
      }
     
#myBtn {
    
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
 
  color: white;
  cursor: pointer;
  padding: 0px;
  border-radius: 40px;
}
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
         <a href="home.php"><img src="Haqou.png" style="height:50px;" ></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="home.php" style=" color: white;">Accueil</a></li>
        <li class="active"  ><a href="produits.php" style=" color: white;background-color: #288EFF;">Produits</a></li>
        <li><a href="contact.php" style=" color: white;">Contact</a></li>
        <li><a href="apropos.php" style=" color: white;">À propos</a></li>
        

      </ul>
      <?php 
         if(isset($_SESSION['id'])){
          echo '<ul class="nav navbar-nav navbar-right">
        <li> <a href="deco.php" style=" color: white;"><span class="glyphicon glyphicon-log-in"></span> Deconnexion</a></li>
      </ul>';          
 }else{
       echo '<ul class="nav navbar-nav navbar-right">
        <li> <a href="connexion.php" style=" color: white;"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
      </ul>';   
 }

          ?>
    </div>
  </div>
</nav>
<!--<?php
 if(isset($_SESSION['id'])){
     echo $_SESSION['id'].'<br>';
     echo $_SESSION['nom'].'<br>';
     echo $_SESSION['numemail'].'<br>';

 }/*else{
     echo 't es pas connecté ';
 }*/
?>-->

<div style="width:300px;height:350px;background-color:white;border-radius: 4px;margin-left:20px;">
   <h3 style="margin-left:85px;color:#36b1b9;padding-top:20px;"> Mon Profile</h3>
    <img src="avatar.png" style="width:100px;height:100px;border-radius: 50px;margin-left:96px;"><br>
    <hr style="width:80%;background-color:#36b1b9; height:1px;" />
    <?php
 if(isset($_SESSION['id'])){
     echo '<h3 style="display:inline;margin-left:10px;color:#36b1b9;">Nom </h3><h4 style="display:inline;color:black"> '.$_SESSION['nom'].'</h4><br>';
     echo '<h3 style="display:inline;margin-left:10px;color:#36b1b9;">Adress </h3><h4 style="display:inline;color:black">'.$_SESSION['numemail'].'</h4><br>';
     
   echo'<ul>
    <li  style="cursor: pointer;list-style:none;background-color:#36b1b9;padding:8px;width:150px;margin-top:20px;margin-left:30px;border-radius:5px;" ><a href="panier.php" style="text-decoration: none;"><img src="panier.png" style="width:50px;display:inline" ></a><a href="panier.php"style="text-decoration: none;"><h4 style="display:inline;color:black" >&nbsp;&nbsp;Panier</h4></a></li>
</ul>'; 

 }else{
     echo '<a href="connexion.php" style="margin-left:90px;">Connectez-Vous</a>';
 }
?>

</div>
    <div style="width:300px;height:100px;background-color:white;border-radius: 4px;margin-left:20px;margin-top:20px;">
     <div class="liste">
     
      <ul class="nav navbar-nav" style="margin-left:33px;">
         
          <li> <a href="https://www.facebook.com/"> <img  src="facebook.png" style="width:50px;" /></a> </li> 
          
          <li> <a href="https://www.instagram.com/?hl=fr"> <img src="instagram.png" style="width:50px;"/></a></li>
          
          <li> <a href="https://twitter.com/login?lang=fr"> <img src="twitter.png" style="width:50px;"/></a></li>
          <p>Suivez-nous sur les réseaux sociaux</p>
      </ul>
    </div>
    </div>
    
    
    
<main id="pos">
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projetihm;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$req = $bdd -> query('SELECT * FROM  produit ');

while($donnee = $req -> fetch())
{
        
        echo '<div style="display: inline-block;width:240px;height:455px;margin:15px;background-color:white;border-radius: 1px;">
        <h2 style="margin-left:50px; color:black"> ' . $donnee['nom']. '</h2>
        <h4 style="margin-left:90px;color:#AFAFAF;">id: ' . $donnee['id']. 
        '</h4>  <img class="img img-thumbnail im" src = " adiministration/'.  $donnee['image'] .' " style="width:185px;height:170px;border-radius: 4px;margin:30px;margin-top:5px;"> <br><h4 style="margin-left:60px;color:red;" >Prix :'  . $donnee['prix']. ' Dzd. </h4> ';
        
    
    
    
    
    
    
    
        echo'   <form action="AP.php" method="POST">
<p>     

<input type="hidden" name="id" value="'.$donnee['id'].'" />
<input type="hidden" name="image" value="adiministration/'.$donnee['image'].'" />
<input type="hidden" name="nom" value="'.$donnee['nom'].'" />

<input type="hidden" name="prix" value="'.$donnee['prix'].'" />

      <h4 style="margin-left:85px;">Quantité:</h4><input type="number" name="quantite" style="border-radius: 5px;border: 1px solid #36b1b9;margin-left:75px;width:90px;"  /><br><br>       
<input type="submit" value="ajout au panier" style="padding:3px;border-radius: 2px;border: 1px solid white; background-color:#36b1b9;color:white;margin-left:45px;width:150px; "/>


      </p>  
        </div> </form> ';
        


        
    }


    
    
?>
</main>






<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="icon.png" style="width:50px;"></button>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>


</body>
</html>