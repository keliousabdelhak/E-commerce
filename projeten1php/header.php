<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a href="home.php"><img src="mylibrary.png" style="height:50px;" ></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active" style=" color: white;"><a href="home.php" style="color: white;background-color: #288EFF;">Accueil</a></li>
        <li><a href="produits.php" style=" color: white;">Produits</a></li>
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