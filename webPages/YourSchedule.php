<?php
session_start();
include 'login.php';
?>
<!--
Greg Corujo
YourSchedule Page
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
            <label class="col-sm-4" id="containerLabel"><h1>Week: Oct 16-22</h1></label>
            <div class="col-sm-4"></div>
        </div>
        
        <br>
        <div class="container-fluid">
          <div class="row content">                                       
              <div class="col-sm-12">                 
                  <div class="col-sm-12 panel panelContainer">
                      <div class="col-sm-12 panelHead">
                          <div class="col-sm-2"></div>
                          <button type="button" class="btn col-sm-3 btn-primary">Last Week</button>
                          <div class="col-sm-2"></div>
                          <button type="button" class="btn col-sm-3 btn-primary">Next Week</button>
                          <div class="col-sm-2"></div>
                      </div>
                      
                      <div class="panel-body panelContent col-sm-12">
                          <table class="table col-sm-12">
                              <thead>
                                <tr>
                                  <th class="col-sm-4">Day</th>
                                    <th class="col-sm-4">Shift</th>
                                    <th class="col-sm-4">Give Up</th>
                                  </tr>
                              </thead>
                              
                              <tbody id="yourSched"></tbody>
                          
                          </table>
                      
                      
                      </div>
                      
                      
                  </div>
              </div>         
            </div>
            
            <div id="tradeModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Who would you like to offer this to?</h4>
                  </div>
                  <div class="modal-body">
                      <form>
                        <div class="form-group">
                          <label for="tradeSelection">Choose 1</label>
                          <select class="form-control" id="tradeSelection">
                            <option>Anyone</option>
                            <option>name</option>
                            <option>name</option>
                            <option>name</option>
                          </select>
                        </div>
                      </form>
                  </div>
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-primary" data-dismiss="modal">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <script src="yourSchedule.js"></script>
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