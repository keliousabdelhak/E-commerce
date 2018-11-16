
   <html>
    <head>
       <meta charset="utf-8">
        <style>
            body{
                /*background-color: #336666;*/
               /* font-family:inherit;*/
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
        </style>
    </head>
    <body>
        <div class="am">
            <div style="background-color: #36b1b9;color:white;border-radius: 4px;">
                <h1 style="margin-left:190px;padding-top:20px;padding-bottom:20px;">Espace administrateur</h1>
            </div>
            <div style="background-color: #36b1b9;height:50px;width:420px;padding: 10px;margin-left:130px;border-radius: 4px;"><ul><a href="ajout.php" style="text-decoration: none;"><li>Ajouter un produit</li></a><a href="home.php" style="text-decoration: none;"><li style="padding-left:50px;">Supprimer un produit</li></a></ul></div>
           <form method="post" action="sup.php">
                <h2 style="margin-left:372px;color:#36b1b9">ID produit :</h2>
               <input type="number" style="margin-left:372px;border-radius: 5px;border: 1px solid #ccc;height:30px;"  name="id"><br>
               <input type="submit" value="Supprimer"style="margin-left:372px;border-radius: 5px;border: 1px solid #ccc;height:30px;margin-top:40px;background-color: #36b1b9;color:white;width:171px;cursor: pointer;">
           </form>
 
        </div>
             <a href="deco.php" style="margin-left:70%;font-size:25px;text-decoration: none; 
color: white;background-color:#36b1b9;padding:8px; border-radius: 4px;">Deconnexion</a>
    </body>
</html>