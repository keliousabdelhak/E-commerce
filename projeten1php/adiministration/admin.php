<html>
    <head>
        <meta charset="utf-8">
         <style>
             body{
                 /*background-image: url(ime.jpg);*/
                 background-color: #E8E8E8;
                   font: 400 15px/1.8 "Lato", sans-serif;
                 color: #336666;

             }
             .adm{
                 padding: 10px;
                 border-radius: 20px;
                 border: 1px solid #ccc;
                 margin-left: 60px;
             }
            .adm1{
                 padding: 10px;
                 border-radius: 20px;
                 border: 1px solid #ccc;
                 cursor: pointer;
                margin-left: 110px;
                margin-bottom: 0px;
                background-color: #36b1b9;
                color: white;
                margin-bottom: 10px;
             }
             .ab{
                 border-radius: 4px;
                 width: 315px;
                margin-left: 38%;
                 margin-top: 12%;
                 background-color: white;
             }
             .am{
                 color: #36b1b9;
                 padding-top: 10px;
                 margin-left: 60px;
                 width: 200px;
                 padding-left: 40px;
        
             }
        
        </style>
    </head>
    
    
    <body>

    <div class="ab">
        <form method="post" action="ajoutadm.php">
           <div class="am"> <h3 > S'authentifier</h3> </div>
            
            <input type="email" name="a1" placeholder="Adress Email" class="adm"><br><br>
            <input type="password" name="a2" placeholder="mot de passe" class="adm"><br><br>
            <input type="submit" value="Connexion" class="adm1">
        </form>
       <!-- <a href="admin1.php" style="color:#36b1b9;text-decoration: none;margin-left:98px;">Crée un compte ?</a>-->
    </div>

</body>
</html>