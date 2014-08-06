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
          
      
    <div id="user" class="col-md-4  col-md-offset-8">
          
          <p>  Welcome  Anton Wijns <img src="img/ik.jpg" class="img-circle"> </p>    <!--user firtsname + lastname --> <!--picture that's uploaded-->
        </div>

    </nav>


    <div class="row">
      
      <div class="col-md-8 col-md-offset-2"> 


          <form  id="featureinput" role="form">
            <div class="form-group">
          
              <input type="text" class="form-control" id="FeatureInput" placeholder="Geef hier je idee voor een gewenste feature" name="addfeature">
            </div>
            
            <button type="submit" class="btn btn-default" name="addfeature">Voeg toe</button>
      </form>


      </div>


    </div>  <!-- end div class row-->


      <div class="row">
        <div class="col-md-8 col-md-offset-2"> 

             <table class="table table-hover">  

               <tr>
                  <th>Ranking</th>
                  <th>Feature</th>
                  <th>Auteur</th> 
                  <th>Likes</th>
                  <th>Liken</th>
                </tr>

                <tr>
                  <td>1</td>
                  <td> Ik wil graag mijn profielfoto kunnen veranderen.</td>
                  <td> <img src="img/ik.jpg" class="img-circle profilepic">   </span> </td>
                  <td>6</td>
                  <td> <span class="glyphicon glyphicon-thumbs-up">   </span> </td> 
                </tr>

                <tr>
                  <td>2</td>
                  <td> Ik wil graag de kleuren kunnen aanpassen</td>
                  <td> <img src="img/ik2.png" class="img-circle profilepic">   </span> </td>
                  <td>3</td>
                  <td> <span class="glyphicon glyphicon-thumbs-up">   </span> </td> 
                </tr>

            </table>

        </div>   <!-- end div class="col-md-8 col-md-offset-2-->
      </div> <!-- end div class = row-->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>