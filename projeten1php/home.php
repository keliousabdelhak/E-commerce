<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SlimRed</title>
  <meta charset="utf-8">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="jquery-3.2.1.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <style>
  
      
      

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
    
      /*dagui*/
      body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1 {
  position: relative;
  opacity: 0.65;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("slm.jpg");
  height: 75%;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}
      .liste{
          margin-left: 42%;
      }
  </style>
</head>
<body>

<?php include('header.php');
      ?>
    
 <div class="bgimg-1">
  <div class="caption" >
    <span class="border" style="  background-color: #8b4513;">SLIMRED</span><br>
    <span class="border" style="  background-color: #8b4513;">Equipements et Pièces de Rechange</span>
  </div>
</div>
    
    
     <?php include('footer.php');
      ?>
</body>
</html>
