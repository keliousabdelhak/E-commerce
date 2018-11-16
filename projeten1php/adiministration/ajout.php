<?php

?>
   <html>
    <head>
       <meta charset="utf-8">
        <style>
            body{
                /*background-color: #336666;*/
                /*font-family:inherit;*/
                font-family: "Roboto","Helvetica Neue",Helvetica,Arial,sans-serif;
            }
            .am{
                margin-left: 23%;
                margin-top: 80px;
                border-radius: 4px;
                width: 700px;
                height: 500px;
                background-color: white;
                
            }
            li{
                
                color: white;
                cursor: pointer;
                list-style:none;
                display: inline;
                font-size: 18px;
            }
             .azz{

                
                margin-left: 130px;
                height: 30px;
                border-radius: 4px;
                border: 1px solid #ccc;
                width: 171px;
                margin-top:0;
            }
            .az{
                position: absolute;
                overflow: hidden;
                z-index: -1;
                opacity: 0;
                
                margin-left: 130px;
                height: 0.1px;
                border-radius: 4px;
                border: 1px solid #ccc;
                width: 0.1px;
                margin-top:0;
            }
            .ak{
                margin-left: 130px;
                height: 30px;
                border-radius: 4px;
                border: 1px solid #ccc;
                width: 171;
                background-color: #36b1b9;
                color: white;
                margin-top: 20px;
                
            }
            h3{
              margin-left: 130px;  
                color: #336666;
            }
            h3{
                color: #36b1b9;
            }
            label{
                margin-top: 10px;
                width: 171px;
                border-radius: 4px;
                margin-left: 130px;
                cursor: pointer;
                background-color: #E8E8E8;
                color: #36b1b9;
                padding-bottom: 8px;
                padding-top: 8px;
                padding-left: 20px;
                padding-right: 20px;
            }
        </style>
    </head>
    <body>
        <div class="am">
            <div style="background-color: #36b1b9;color:white;border-radius: 4px;">
                <h1 style="margin-left:190px;padding-top:20px;padding-bottom:20px;">Espace administrateur</h1>
            </div>
            <div style="background-color: #36b1b9;height:50px;width:420px;padding: 10px;margin-left:130px;border-radius: 4px;"><ul><a href="ajout.php" style="text-decoration: none;"><li>Ajouter un produit</li></a><a href="home.php" style="text-decoration: none;"><li style="padding-left:50px;">Supprimer un produit</li></a></ul></div>
         <form method="post" action="hak.php" enctype="multipart/form-data">
            <h3>Nom :</h3>
             <input type="text" class="azz" name="nom"><br>
             <h3>Prix :</h3>
             <input type="number" class="azz" name="prix"><br><br><br>
                          <label for="Image" ><!--<img src="up.png" style="width:50px;">-->Inserer Une Image</label>
             <input type="file" class="az" id="Image" name="haqou" ><br><br>
             <input type="submit" value="ajouter" class="ak">
         </form>
        </div>
        <a href="deco.php" style="margin-left:70%;font-size:25px;text-decoration: none; 
color: white;background-color:#36b1b9;padding:8px; border-radius: 4px;">Deconnexion</a>
    </body>
</html>