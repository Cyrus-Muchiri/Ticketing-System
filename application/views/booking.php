<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.jpg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Churchill Laugh Industries
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
              User Panel
            </a>
            
          </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
         
            <a href="./users.html">
              
              <p>Event Details</p>
            </a>
          </li>
          <li class="active">
			  <a href="<?php echo base_url()?>users">
                  
                  <p>Event Details</p>
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
            <a class="navbar-brand" href="#">Users Panel</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
                  <p>
					  <a href="<?php echo base_url()?>index"></a>
                  </p>
                </div>
            
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header">
        <div class="header text-center">
          <h2 class="title">Fill in The Form to Complete Your Booking to <u><?php echo $eventDetails->event_name ?></u></h2>
          
        </div>
      </div>
      <div class="content">
          <div class="row">
            <div class="col-md-6">
                    <div class="card card-signup" data-background-color="white">
                            <form class="form" method="POST" action="<?php echo base_url()?>bookEvent">
                              <div class="card-header text-center">
                                <h3 class="card-title title-up">Fill in the Form To Complete Booking</h3>
                                
                              </div>
                              <div class="card-body">
                                <div class="input-group no-border">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="now-ui-icons users_circle-08"></i>
                                    </span>
                                  </div>
                                  <input type="text" class="form-control" placeholder="First Name..." name="firstname" required>
                                </div>
                                <div class="input-group no-border">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="now-ui-icons users_circle-08"></i>
                                    </span>
                                  </div>
                                  <input type="text" placeholder="Last Name..." class="form-control" name="lastname" required>
									<input type="hidden" class="form-control" name="event_ID" value="<?php echo $eventDetails->index_ID ?>" required>

								</div>
                                <div class="input-group no-border">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="now-ui-icons ui-1_email-85"></i>
                                    </span>
                                  </div>
                                  <input type="email" class="form-control" placeholder="Email..." name="email" required>
                                </div>
                                <div class="input-group no-border">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">
                                        <i class="now-ui-icons text_caps-small"></i>
                                      </span>
                                    </div>
                                    <input type="tel" class="form-control" placeholder="Phone Number..." name="phonenumber" required>
                                  </div>
                                  <div class="input-group no-border">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text">
                                            <i class="now-ui-icons text_caps-small"></i>
                                          </span>
                                        </div>
                                        <input type="number" max="5" min="0" class="form-control" placeholder="Number Of Tickets" name="ticket_count" required>
                                      </div>
                                
                                    <div class="input-group no-border">
                                       
                                        <input type="radio" class="form-control" name="ticket_type" value="VIP" checked> VIP <br>
                                        <input type="radio" class="form-control" name="ticket_type" value="VIP" > Regular <br>
                                      </div>
                                
                              </div>
                              <div class="card-footer text-center">
                                <button type="submit" class="btn btn-neutral btn-round btn-lg">Submit Details</button>
                              </div>
                            </form>
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
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url();?>assets/demo/demo.js"></script>
</body>

</html>
