<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloggermade</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    
 
</head>
<body>
  <br><br><br>
<div class="container   mt-4">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            
                            <div class="col-lg-4 box  " style="border-radius:13px ;height:350px">
                            <br>
                            <form method="POST" action="inc/register.inc.php">
                                            <fieldset>
                                                
                                            <h2 class="text-center" style="color:#141e45 ">Inscription</h2>
                                                <div class="form-group ">
                                                <label for="exampleInputEmail1">Pseudo</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pseudo" placeholder="Bloggermade">
                                            
                                                </div>
                                                <div class="form-group">
                                                <label for="exampleInputPassword1">Mot de passe</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" name="psw" placeholder="Mot de passe">
                                                </div>
                                             
                                                <button  class="btn btn-success" type="submit" name="submit">
                                                    <a href="register.php">
                                                        <span style="text-decoration:none; color:#fff;">
                                                    INSCRIPTION
                                                </span></a>
                                                </button><br>
                                                
                                                <a href="index.php">Déja membre? Connectez vous!!!  </a>
                                        
                         </form>
                            </div>
                            <div class="col-lg-4"></div>
                            
                        </div>
                    </div>


    
</body>
</html>