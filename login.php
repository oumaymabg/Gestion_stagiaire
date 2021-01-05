<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Se connecter</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/monStyle.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
      .loginHead{
    background-color: #434244;
    color: #fff;
    border-color: #434244;
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}
      }
    </style>
  </head>
  <body>    
    <div class="container col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">     
      <div class="panel panel-primary espace60 ">
        <div class="loginHead">Se connecter</div>
        <div class="panel-body">
          <form method="post" action="SeConnecter.php" class="form">
          
                  
                      
          
            
            <div class="form-group">
              <label for="LOGIN" class="control-label">Nom d'utilisateur</label>
              <input type="text" name="LOGIN" id="LOGIN" class="form-control"/>
            </div>
            
            <div class="form-group">
              <label for="PWD" class="control-label">Mot de passe</label>
              <input type="password" name="PWD" id="PWD" class="form-control"/>
            </div>
              
            <button type="submit" class="btn btn-success">Se connecter</button>
            <br><br>
            
            <a href="InitialiserPwd.php">Mot de passe Oublié</a>

            
          </form>
        </div>
      </div>      
    </div>
  </body>

</html>
