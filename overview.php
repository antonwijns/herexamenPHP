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
        <div id="navigation" class="col-md-6 col-md-offset-2">

          <ul class="nav nav-tabs " role="tablist">
            <li>
              <a href="adduser.php">Gebruikers toevoegen</a>
              </li>
            <li class="active"><a href="overview.php">Overzicht</a></li>

          </ul>
        </div> <!--end navigation-->    
      
        <div id="user" class="col-md-4">
          
          <p>  Welcome  Anton Wijns <img src="img/ik.jpg" class="img-circle"> </p>    <!--user firtsname + lastname --><!--picture that's uploaded-->
        </div>
    </nav>

<div class= "clearfix" ></div>


    
    <div class="row">
    <div id="overview" class="col-md-8 col-md-offset-2 ">
      
           <table class="table table-hover">  

               <tr>
                  <th>Feature</th>
                  <th>Auteur</th> 
                  <th>Verwijderen</th>
                </tr>

                <tr>
                  <td> Ik wil graag mijn profielfoto kunnen veranderen.</td>
                  <td> Anton Wijns</td> 
                  <td> <span class="glyphicon glyphicon-remove">   </span> </td>
                </tr>


                 <tr>
                  <td> Kleuren van de website kunnen aanpassen</td>
                  <td> Steven Willems</td> 
                  <td> <span class="glyphicon glyphicon-remove">   </span> </td>
                </tr>
            </table>
              

    </div>    <!-- end add user-->





  </div> <!-- end row-->

   



 

    </div>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>