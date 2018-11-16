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
      .zed{
          padding: 50px;
          border-radius: 0px;
          height: 1000px;
          margin-top: 0px;
          margin-left: 150px;
          margin-right: 150px;
          background-color: white;
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
        <li><a href="produits.php" style=" color: white;">Produits</a></li>
        <li><a href="contact.php" style=" color: white;">Contact</a></li>
        <li class="active"><a href="apropos.php"  style="color: white;background-color: #288EFF;">À propos</a></li>

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
<div class="zed">
   <h2 style="color:dodgerblue;">Création de la Société</h2>
    <h4>
        SlimRed est une entreprise nationale de secteur privé, qui s’engage au service de sa
clientèle afin d’acquérir une importante part de marché dans son futur proche.
    </h4>
   <h4>La société SlimRed a été créée le 13 avril 2003 à Alger. Le début réel de ses activités
remonte à l’année 1990, dans le domaine du négoce des pièces industrielles de rechange.
</h4> 
 <h2 style="color:dodgerblue;">Statut Juridique</h2>
 <h4>Forme juridique : SARL</h4>
 <h4>Capital social : 60 000 000 Dinars (600 k€)</h4>
 <h2 style="color:dodgerblue;">Siège social</h2>
 <h4>Centre d’Affaires Al Qods CA 11/17 – 16002 Chéraga - Alger</h4>
 <h2 style="color:dodgerblue;">Atelier au Sud algérien</h2>
 <h4>En cours de réalisation. Chargé de la maintenance pétrolière, service après vente et suivi des contrats sur les zones pétrolières</h4>
<img src="catreSR.png" style="width:100%;"  >
</div>


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