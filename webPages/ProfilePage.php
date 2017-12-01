<?php
session_start();
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
      <style>
          td {
              padding: 10px;
          }
          #about { text-align: center;}
          .bioLabel { text-align: center;  }
          .bio {
              background-color: #F5F5F5;
              border-radius: 15px;
              padding: 15px;
          }
          .profileTable {
              background-color: inherit;
              border-radius: 15px;
          }
      </style>
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
                    <li><a href="YourSchedule.php">Your Schedule</a></li>
                    <li><a href="ManagerSchedulePage.php">Manager Schedule</a></li>
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
            <label class="col-sm-4" id="containerLabel"><h1>Your Profile</h1></label>
            <div class="col-sm-4"></div>
        </div>
        
        <br>
        <div class="container-fluid">
          <div class="row content">                                       
              <div class="col-sm-12">                 
                  <div class="col-sm-12 panel panelContainer">
                      <div class="col-sm-12 panelHead">
                            <button type="button" class="btn btn-default">Edit Profile</button>  
                      </div>
                      <div class="panel-body panelContent col-sm-12">
                            <div class="col-sm-12 bio">
                                <div class="col-sm-12">
                                    <div class="col-sm-2"></div>
                                <div class="col-sm-6">
                                    <table class="profileTable">
                                        <tr>
                                            <td><label>Name:</label></td>
                                            <td><?php echo $_SESSION["firstname"] . " " . $_SESSION["lastname"];?></td>
                                        </tr>
                                        <tr>
                                            <td><label>Phone:</label></td> 
                                            <td><?php echo $_SESSION["phone"]?></td>
                                        </tr>
                                        <tr>
                                            <td><label>HireDate:</label></td>                         
                                            <td><?php echo $_SESSION["hiredate"]?></td>
                                        </tr>
                                        <tr>
                                            <td><label>Email:</label></td>
                                            <td><?php echo $_SESSION["email"]?></td>
                                        </tr>
                                        <tr>
                                            <td ><label>Title:</label></td>
                                            <td id="about"><?php echo $_SESSION["title"]?></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-sm-4">
                                    <img src="images/IMG-4911.JPG" class="img-thumbnail" alt="Profile Picture" width="200px" height="100px"> 
                                </div>
                                </div>
                                
                                <div class="col-sm-12">
                                    <h3 class="bioLabel"><u>About Me</u></h3>
                                    <p class="bio">
                                        <?php echo $_SESSION["description"]?>
                                    </p>
                                </div>
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