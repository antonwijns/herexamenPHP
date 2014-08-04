<!DOCTYPE html>
<html>
  <head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/screen.css" rel="stylesheet" media="screen">
  </head>
  <body>


    <nav class="row">
        <div id="navigation" class="col-md-8">

          <ul class="nav nav-tabs " role="tablist">
            <li class="active">
              <a href="adduser.php">Gebruikers toevoegen</a>
              </li>
            <li><a href="overview.php">Overzicht</a></li>

          </ul>
        </div> <!--end navigation-->    
      
        <div id="user" class"col-md-4">
          
          <p>  Welcome </p>


        </div>

    </nav>

<div class= "clearfix" ></div>


    
    <div class="row">
    <div id="adduser" class="col-md-4 col-md-offset-4 clearfix">
      
           
                <div class="form-group">
                  <label for="InputFirstName">Voornaam</label>
                  <input type="text" class="form-control" id="InputFirstName" placeholder="Geef Voornaam in">
                </div>

               
                <div class="form-group">
                  <label for="InputLastName">Achternaam</label>
                  <input type="text" class="form-control" id="InputLastName" placeholder="Geef Achternaam in">
                </div> 

              <div class="form-group">
                <label for="InputEmail">E-mail</label>
                <input type="email" class="form-control" id="InputEmail" placeholder="Geef e-mailadres in">
              </div>
              <div class="form-group">
                <label for="InputPassword">Paswoord</label>
                <input type="password" class="form-control" id="InputPassword" placeholder="Kies een paswoord">
              </div>


             <div class="form-group">
              <label for="InputFile">Voeg een profielfoto toe.</label>
              <input type="file" id="InputFile">
              <p class="help-block">Opgelet, bestand mag maximum 1 mb groot zijn.</p>
            </div>
  
            <button type="submit" class="btn btn-default">Gebruiker toevoegen</button>
</form>


    </div>    <!-- end add user-->


  </div> <!-- end row-->

   



 

    </div>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>