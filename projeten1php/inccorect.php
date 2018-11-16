
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
      /* ta3 le formulaire */
    .kls{
    border: 1px;
    background-color:white;
    width: 400px;
    margin-left: 35%;
    margin-top: 50px;
    padding: 10px;
    /*color: aliceblue;*/
        
}
.psy{
    margin-top: 20px;
    border: 1px;
    width: 950px;
    margin-left: 15%;
    background-color: white;
    padding: 10px;
    /*color: aliceblue;*/
        
}

.pf{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.ahem{
    width: 350px;
    padding: 12px 20px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 15px;
    box-sizing: border-box;
}
.ahemm
      {
  background-color: #288EFF;
    width:190px;
    padding: 12px 20px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 20px;
    box-sizing: border-box;
}
      .pff{
          background-color: #383838;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 20px;
    box-sizing: border-box;
}
   
    /* body{
          background-color: #C0C0C0;
         background-attachment: fixed;
      }*/
    

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
        <li ><a href="produits.php" style=" color: white;">Produits</a></li>
        <li><a href="contact.php" style=" color: white;">Contact</a></li>
        <li><a href="apropos.php" style=" color: white;">À propos</a></li>
        

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="connexion.php" style="color: white;background-color: #288EFF;"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="psy">
	<form method="post" action="psy.php">
		<label for="a" ></label><br>
		<input type="email" id="a" name="tlfn" placeholder="Téléphone ou email" class="ahem">
		<label for="b"></label>
		<input type="password" id="b" name="tmp" placeholder="Mot de passe " class="ahem">
		<input type="submit" value="Se Connecter" name="haqou" style="color: aliceblue;" class="ahemm">
   	    <!--<hr style="width:80%;background-color:#606060; height:1px;" />-->
        </form>
         <span style="color:red; margin-left:380px;"> Ce compte n'éxiste pas !</span>
</div>
<div class="kls" >

<!--<div class="in">
	<form>
	<h2>Connexion</h2>
		<label for="a" ></label><br>
		<input type="text" id="a" name="tlfn" placeholder="Téléphone ou email"><br>
		<label for="b"></label><br>
		<input type="text" id="b" name="tmp" placeholder="Mot de passe "><br>
		<input type="submit" value="Se connecter " style="color: aliceblue;" ><br>
   	    <hr style="width:80%;background-color:#606060; height:1px;" /><br>
        </form>
    </div>-->
    <div class="in">
   <form method="post" action="inscription.php" >       
   	<h2  style="font-size:20px;color: #2f4f4f;">Vous avez pas un compte ? Inscrivez-vous</h2>
   	    <label for="c" ></label>
   	    <input type="text" id="c" name="ncpl" placeholder="Nom complet" class="pf"><br>
   	    <label for="d" ></label><br>
   	    <input type="email" id="d" name="nte" placeholder="N° de téléphone ou Email" class="pf"><br>
   	    <label for="e" ></label><br>
   	    <input type="password" id="e" name="mp" placeholder="Mot de passe" class="pf"><br>
   	    <input type="submit" name="submit" value="S'inscrire " style="background-color:white;color:black;border-color:black;" class="pff"><br>
   	    <!--<hr style="width:80%;background-color:#606060; height:1px;" />--> 
       </form>
    </div>
  
   <!-- <form>  
   	<h2 style="margin-left:10px;">Vous êtes administrateur ?</h2>
   	    <label for="f" ></label><br>
   	    <input type="text" id="f" name="ide" placeholder="Identifiant"><br>
   	    <label for="g" ></label><br>
   	    <input type="text" id="g" name="mdpa" placeholder="Mot de passe"><br>
   	    <input type="submit" value="Se connecter " style="color: aliceblue;" ><br>  
        </form> -->
</div>

</body>
</html>
