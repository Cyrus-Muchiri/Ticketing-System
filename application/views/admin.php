<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.jpg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Churchill Laugh Industry
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          Churchill Laugh Industry
        </a>
        
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./admin.html">
              <p>ADMIN PANEL</p>
            </a>
          </li>
          <li>
              <a href="./events.html">
                <p>Events</p>
              </a>
            </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#">Admin</a>
          
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <p>
              <a  href="index.html">Home</a>
            </p>

          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">ADD EVENTS</h5>
                
              </div>
              
                <div class="card-body">
                    <div class="col-sm-6 col-lg-3">
                                    
                    <div class="col text-center">
                        <button class="btn btn-primary btn-outline-primary btn-round" data-toggle="modal" data-target="#EventsModal"> Add Event</button>
                    </div>          
                  <!-- Sart Modal -->
                   <div class="modal fade" id="EventsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" >
                        <div class="modal-content" >
                            <form class="form" method="POST" action="">
                              <div class="modal-header justify-content-center">
                          
                            <h4 class="title title-up">Add New Event</h4>
                          </div>
                          
                          <div class="modal-body">
                              <div class="input-group no-border">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                    </span>
                                  </div>
                                  <input type="text" class="form-control" placeholder="Event Name" name="event_name" id="event_id" required>
                                </div>
                              <div class="input-group no-border">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">
                                        <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                      </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Location" name="location" id="location" required>
                                  </div>
                                <div class="input-group no-border">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                        </span>
                                      </div>
                                      <input type="number" class="form-control" placeholder="Number Of Attendees" name="attendees" id="attendees" required>
                                    </div>
                                    <div class="input-group no-border">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text">
                                            <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                          </span>
                                        </div>
                                        <input type="number" class="form-control" placeholder="VIP Ticket Price" name="ticket_vip" id="ticket_vip" required>
                                      </div>
                                      <div class="input-group no-border">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text">
                                              <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                            </span>
                                          </div>
                                          <input type="number" class="form-control" placeholder="Regular Ticket Price" name="ticket_regular" id="ticket_regular" required>
                                        </div>
                                        <div class="input-group no-border">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text">
                                                <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                              </span>
                                            </div>
                                            <input type="date" class="form-control" placeholder="Date" name="date" id="date" required>
                                          </div>
              
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-round btn-lg">Save</button>
                            <button type="button" class="btn btn-danger btn-round btn-lg" data-dismiss="modal">Close</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                                  
                                </div> 
                              </div>
                
                
             
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer" data-background-color="black">
        <div class=" container ">
          
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Churchill Laugh Industry
            
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url();?>assets/js/core/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url();?>assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url();?>assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>