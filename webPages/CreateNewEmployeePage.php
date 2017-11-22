<?php
include 'login.php';
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
      <style>.error {color: #FF0000;}</style>
  </head>
    
        <div class="container-fluid headPage">
            <div class="row">
                <img class="col-sm-3" src="images/logo-bistro-by-the-tracks.gif" alt="Bistro By The Tracks Logo">
            </div>
        
        </div>
    
    <body>
        
        <div class="container-fluid">
            <nav class="navbar navbar-form">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                  </button>
                  <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="HomePage.php">Home</a></li>
                    <li><a href="YourSchedule.html">Your Schedule</a></li>
                    <li><a href="ManagerSchedulePage.html">Manager Schedule</a></li>
                    <li><a href="AnnouncementsPage.html">Announcements</a></li>
                    <li><a href="ShiftTradesPage.html">Shift Trades</a></li>
                    <li><a href="ProfilePage.php">Profile</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-left">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                      </div>
                      <button type="submit" class="btn btn-default">Go</button>
                    </form>
                  </ul>
                </div>
              </div>
            </nav>
        </div>
        <br>
        
        <div class="container-fluid">
            <div class="col-sm-4"></div>
            <label class="col-sm-4" id="containerLabel"><h1>Create New Employee</h1></label>
            <div class="col-sm-4"></div>
        </div>
        
        <br>
        <div class="container-fluid">
          <div class="row content">                                       
              <div class="col-sm-12">                 
                  <div class="col-sm-12 panel panelContainer">
                      
                      <div class="panel-body panelContent col-sm-12">
                          <div class="container">
                              <form method="post" action="CreateEmployee.php">
                                <div class="form-group">
                                    <span class="error"> <?php echo $_SESSION["createErr"];?></span><br>
                                  <label for="firstName">First Name:</label>
                                  <input type="text" class="form-control" id="firstName" placeholder="Enter first name" name="firstName">
                                    <span class="error"> <?php echo $_SESSION["firstNameErr"];?></span>
                                </div>
                                <div class="form-group">
                                  <label for="lastName">Last Name:</label>
                                  <input type="text" class="form-control" id="lastName" placeholder="Enter last name" name="lastName">
                                    <span class="error"> <?php echo $_SESSION["lastNameErr"];?></span>
                                </div>  
                                <div class="form-group">
                                  <label for="userName">Username:</label>
                                  <input type="text" class="form-control" id="userName" placeholder="Enter username" name="userName">
                                    <span class="error"> <?php echo $_SESSION["userNameErr"];?></span>
                                </div>
                                <div class="form-group">
                                  <label for="pwd">Password:</label>
                                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                                    <span class="error"> <?php echo $_SESSION["pwdErr"];?></span>
                                </div>
                                <div class="form-group">
                                  <label for="title">Title:</label>
                                  <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
                                    <span class="error"> <?php echo $_SESSION["titleErr"];?></span>
                                </div>
                                <div class="form-group">
                                  <label for="email">Email:</label>
                                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                    <span class="error"> <?php echo $_SESSION["emailErr"];?></span>
                                </div>  
                                <div class="checkbox">
                                  <label><input type="checkbox" name="admin">Administrator Rights</label>
                                </div>  
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="cancel" class="btn btn-default">Cancel</button>  
                              </form>
                            </div>
                      </div>   
                  </div>
              </div>         
            </div>
        </div>                    
    </body>
    
    <footer class="container-fluid"> 
          <div class="container">   
              <div class="col-sm-12">
                  <div class="col-sm-3"></div>
                  <div class="col-sm-6">
                  <table>
                    <tbody>
                      <tr>
                        <td class="footLinks"><a href="CreateNewEmployeePage.php">Create New Employee</a></td>
                        <td class="footLinks"><a href="http://www.bistrobythetracks.com/">Bistro Website</a></td>
                        <td class="footLinks"><a href="HelpPage.html">Help</a></td>
                      </tr>
                    </tbody>
                  </table>
                  </div>
              </div>
            </div>
        </footer>
</html>