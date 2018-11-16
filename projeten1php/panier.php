<?php
 session_start();   
    
?> 
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="jquery-3.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
      body{
          
background-color: #EFEFEF;      }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
                 border: none;
         background-color: #2f4f4f;
      margin-bottom: 0;
      border-radius: 0;
        
    }
    
    /* Add a gray background color and some padding to the footer */
    .liste {
      background-color: #f2f2f2;
    padding-top:30px;
    padding-bottom:30px;
    margin-top: 200px;
        margin-left:550px;
        
    
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
  
<!--<?php include('header.php');
?>-->

<?php





	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=projetihm;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
    }
    
   



$panier=$_SESSION['panier'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Panier</title>

    <!-- Bootstrap -->
    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
       <link href="css/style.css" rel="stylesheet">
       <link href="panier.css.txt" rel="stylesheet">
      
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
 <!-- <?php include('header_client.php')?> -->




  
  
  
   <h1 style="margin-left:45%;"> Panier</h1>
   <table   class="table table-striped table-bordered table-hover table-condensed">
   
	<thead>
		<tr class="danger"> 

<tr>
 
   <th>
       image du produit
   </th>
    <th>
       nom du produit
   </th>
   <th>
       prix unitaire
   </th>
   <th> 
       quantite
   </th>
       <th>
       id
   </th>
       
</tr> 
    <?php 
$total=0;
for($i=0;$i<count($panier);$i++ ){
   $total= $total+$panier[$i]['prix']*$panier[$i]['quantite']; ?>
  <tr class="warning">
       
<td> <img  class="img img-thumbnail img-responsive im" src = "<?php echo $panier[$i]['image']; ?>" style="height:120px;width:120px"/></td>
         <td>  <?php echo($panier[$i]['nom'] ) ?></td> 
        <td>  <?php echo($panier[$i]['prix'] ) ?></td> 
        <td>  <?php echo($panier[$i]['quantite'] ) ?></td>
          <td>  <?php echo($panier[$i]['id'] ) ?></td>  
       <td>  <a href="supprimer.php?index=<?=$i?>">supprimer</a></td>  
   </tr>
    
    
    
  
    
    
    
   <?php } ?>
   <div class="well"><h2 style="color:red;">

    
    <tr >
        <td colspan="2">TOTAL:</td>
        <td> <?php echo($total) ?> </td>
    </tr>
    
    </div>
        
		</tbody>
		
</table>
<form action="validerpanier.php" method="post">
<div class="col-xs-3"><input type='submit' class="btn btn-danger"data-toggle="modal"  name='ELIMINERliminer' value='Passer la commande' style="background-color:#339933;border:none;margin-left:130px;" ></div>


       
<div class="text-center">

<div class="col-xs-3"><input type='button' id="validerPanier"  class="btn btn-danger"data-toggle="modal"  name='valider' value='Annuler ' style="width:200px;margin-left:150px;"></td></tr>

   
</form>

</div>

  <a href="produits.php" style="margin-left:0%;font-size:20px;text-decoration: none; 
color: white;background-color:#36b1b9;padding:8px; border-radius: 4px;">Retour vers produits</a>
 

<div class="modal fade" id="valider">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
    
        
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
<!-- /.modal2 -->

<div class="modal fade" id="supprimercommande">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        <div class="alert alert-danger">VOULEZ VOUS VRAIMENT SUPPRIMER VOTRE COMMANDE?</div>
        <form method="post" action="">
        <button class="btn btn-primary"name="ouisupp"style="margin-right:10px;" >OUI</button>
    <button class="btn btn-primary"name="nonsupp">NON</button></form>
      </div>
        
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
<!-- /.modal2 -->

     
      <div class="sally-content">
          
          <div class="container">
             <div class="raw">
                 <div class="col-md-12">
                    <div class="col-md-4">
                      <H2></H2>  
                    </div>
                     <div class="col-md-8"></div>
                     <h2></h2>
                 </div>
             </div>
          </div>
</div>
      
 <!-- <?php include('footer_client.php'); ?> -->
 <div class="liste">
     
      <ul class="nav navbar-nav">
         
          <li> <a href="https://www.facebook.com/"> <img  src="facebook.png" style="width:50px;" /></a> </li> 
          
          <li> <a href="https://www.instagram.com/?hl=fr"> <img src="instagram.png" style="width:50px;"/></a></li>
          
          <li> <a href="https://twitter.com/login?lang=fr"> <img src="twitter.png" style="width:50px;"/></a></li>
          <p>Suivez-nous sur les réseaux sociaux</p>
      </ul>
    </div>
     
     
     
</body>
</html>
 