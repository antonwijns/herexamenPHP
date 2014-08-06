<?php 

include_once('classes/User.class.php');

$user = new User();
if (isset($_POST['btnSignup']))
{

  try {

  $pass   = $_POST['password'];
  $salt = "KZE9323.|@è.==+";
  $hashed    = md5($pass . $salt);

  $owner->FirstName     = $_POST['firstname'];
  $owner->LastName    = $_POST['name'];
  $owner->Email       = $_POST['email'];
  $owner->PhoneNumber   = $_POST['phonenumber'];
  $owner->Password    = $hashed;
  $owner->City      = $_POST['city'];
  $owner->Street      = $_POST['street'];
  $owner->PostalCode    = $_POST['postcode'];

  $userExists =     $owner->userExists();
  if($userExists == false){
    $owner->register();
    $feedback="Succesvol geregistreerd";
  }else{
    $feedback = "Email adres is al in gebruik";

  }
  

   } catch (Exception $e) {
    
      $feedback = $e->getMessage();
      

    }
}

if (isset($_POST['btnLogin']))
{

  try {

  $pass         = $_POST['password'];
  $salt           = "KZE9323.|@è.==+";
  $hashed           = md5($pass . $salt);

  $owner->Email       = $_POST['username'];
  $owner->Password    = $hashed;
  $ownerID =        $owner->getOwnerId();
  $ownerName=       $owner->getOwnerName();
  $loggedin =       $owner->login();
  
  session_start();

  $_SESSION['loggedin'] = $loggedin;
  $_SESSION['ownerid'] = $ownerID;
  $_SESSION['ownerName'] = $ownerName;
  if ($loggedin== true)
  {
    header("Location: kiesrestaurant.php");
  }else{
    $feedback = "paswoord of emailadres is fout";
  }

   } catch (Exception $e) {
    
      $feedback = $e->getMessage();
     }
}


 ?><!DOCTYPE html>
<html>
  <head>
    <title>Add Some Features</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/screen.css" rel="stylesheet" media="screen">
  </head>
  <body>

<div class="row">
<div class="col-md-4"></div>
  <div id="login" class="col-md-4 "> 
                


                <img src="img/logo.png" alt="logo">
              

  <form role="form">
  <div class="form-group">
    <label for="EmailLogin">E-mail</label>
    <input type="email" class="form-control" id="EmailLogin" placeholder="Geef je e-mailadres">
  </div>
  <div class="form-group">
    <label for="PasswordLogin">Paswoord</label>
    <input type="password" class="form-control" id="PasswordLogin" placeholder="Voer een paswoord in">
  </div>
  


  
 
  <button type="submit" class="btn btn-default">Inloggen</button>
</form>
         


                
</div> <!--end col-md-4-->

<div class="col-md-4"></div>
 
</div>   <!-- end row-->

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>



