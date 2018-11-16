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
          
        color: #36b1b9;
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
      h4{
          margin-top: 50px;
          margin-left:200px;
      }    
         .kls{
    border: 1px;
    background-color:white;
    width: 400px;
    margin-left: 35%;
    margin-top: 70px;
    padding: 10px;
    color:#505050;
        
}

input[type=text],input[type=number],textarea{
    width: 100%;
    padding: 10px 18px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #F0F0F0;
}
      input[type=submit]{
    background-color: #288EFF;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 20px;
    box-sizing: border-box;
          color: aliceblue;
}
      label{
          color: #288EFF;
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
        <li class="active"><a href="contact.php" style="color: white;background-color: #288EFF;">Contact</a></li>
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
 <h4 style="color: #36b1b9;">Vous avez une question ou un commentaire ? Remplissez ce formulaire. Nous vous apporterons une réponse rapide. </h4>
 <hr style="width:80%;background-color:#288EFF; height:1px;" />

<div class="kls">
<form>
	
		<label for="a" >Nom/Prénom</label><br>
		<input type="text" id="a" name="np" placeholder=""><br>
		<label for="b">Téléphone/Email</label><br>
		<input type="text" id="b" name="te" placeholder=""><br>
		<label for="c">Sujet de votre message</label><br>
		<input type="text" id="c" name="sm" placeholder=""><br>
		<label for="d">Message</label><br>
		<textarea  id="d" name="msg"></textarea><br>
		<input type="submit" value="Envoyer "><br>
</form>
    </div>


</body>
</html>