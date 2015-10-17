<?php

include('contact2.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>SP Gaming Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
      <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">SP Gaming</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li> 
                <li><a href="location.html">Location</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="accessories.html">Accessories</a></li>
                    <li><a href="#">Collectibles</a></li>  
                    <li><a href="consoles.html">Consoles</a></li>
                    <li><a href="games.html">Games</a></li>
                    <li><a href="#">Weekly Deals</a></li>
                  </ul>
                </li>
                  <li class="active"><a href="contact.php">Contact</a></li>
              </ul>
                
               <ul class="nav navbar-nav navbar-right">
                <li><a href="sign_in.html">Member Login</a></li>
                </ul>
                 
                
            </div>
          </div>
        </nav>

      </div>
    </div>


<section>
      <div class="container sign-in">
          <div class="row">
              <div class="col-md-4">
          <h1>Contact Us</h1>
          <p>If you have any questions, comments or concerns, please do let us know by filling out the forms below. After it is sent, we will do our best to provide you with the answer you are looking for as soon as possible. We usually respond within 24 hours, so please be patient.</p>
                  </div>
          <div class="col-md-8 pushdown">
<form class="form-horizontal" role="form" method="post" action="contact.php">
    
     <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="name" placeholder="First & Last Name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);  ?>">
        <?php if(isset($errName)){echo "<p class='text-danger'>$errName</p>";} ?>
        
    </div>
  </div>
    
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" id="email" placeholder="Email"
        value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);  ?>">
        <?php if(isset($errEmail)){echo "<p class='text-danger'>$errEmail</p>";} ?>
    </div>
  </div>
    
  <div class="form-group">
      <label for="message" class="col-sm-2 control-label">Message</label>
    <div class="col-sm-offset-2 col-sm-10">
        <textarea class="form-control" name="message" rows="4" placeholder="Enter message here..."><?php if(isset($_POST['message'])){echo $_POST['message'];} ?></textarea>
        <?php if(isset($errMessage)){echo "<p class='text-danger'>$errMessage</p>";} ?>
    </div>
  </div>
    
    <div class="form-group">
    <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="human" id="human" placeholder="Are You Human?" value="<?php if(isset($_POST['human'])){echo htmlspecialchars($_POST['human']);} ?>">
        <?php if(isset($errHuman)){echo "<p class='text-danger'>$errHuman</p>";} ?>
             
    </div>
  </div>
    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default">Send</button>
    </div>
  </div>
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <!--Will be used to display alert to the user -->
            <?php if(isset($result)){echo "$result"; }?>
        </div>
    </div>
    </div>
</form>
      </div><!--end col md 8-->
    </div><!--end row-->
      </section>
            <!-- FOOTER -->
     <center> <footer>
        <p>&copy; 2015 SP Gaming Shop | Peiffer Designs | All Rights Reserved &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
      </center>
      
      
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      
</body>
</html>