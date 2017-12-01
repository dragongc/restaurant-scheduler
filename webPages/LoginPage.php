<?php
session_start();

?>
<!--
Greg Corujo
HomePage
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
    crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="Styles.css">
      <style>
          .error {color: #FF0000;}
      </style>
  </head>
    
        <div class="container-fluid headPage">
            <div class="row">
                <img class="col-sm-3" src="images/logo-bistro-by-the-tracks.gif" alt="Bistro By The Tracks Logo">
            </div>
        
        </div>
    
    <body>

        <div class="container-fluid">
            <div class="col-sm-4"></div>
            <label class="col-sm-4" id="containerLabel"><h1>RESTaurant Assured Login</h1></label>
            <div class="col-sm-4"></div>
        </div>
        
        <br>
        <div class="container-fluid">
          <div class="row content"> 
              <div class="col-sm-3"></div>
              <div class="col-sm-6">                 
                  <div class="col-sm-12 panel panelContainer">
                      
                      <div class="panel-body panelContent col-sm-12">
                          <div class="col-sm-2"></div>
                          <div class="col-sm-8 login">

                          <form method="post" action="LoginVerify.php" onsubmit="return validateForm()" id="login">

                              <div class="form-group">
                                  <span class="error"> <?php echo $_SESSION["notfound"];?></span><br>
                                <label for="usr">UserName:</label>
                                <input type="text" class="form-control" id="usr" name="usr">
                                  <span class="error" id="usrError"></span>
                              </div>

                              <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" name="pwd">
                                  <span class="error" id="pwdError"></span>
                              </div>

                              <div class="checkbox">
                                <label><input type="checkbox" name="cb"> Remember me</label>
                              </div>
                              <input type="submit" class="btn btn-info" value="Login">

                            </form>
                            </div>
                      </div>   
                  </div>
              </div>
              <div class="col-sm-3"></div>
            </div>
        </div>
        <script src="LoginVerify.js"></script>
    </body>
</html>