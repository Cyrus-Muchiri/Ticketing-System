<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.jpg">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<title>
		Churchill Laugh Industry
	</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
		  name='viewport'/>
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
		  integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!-- CSS Files -->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="<?php echo base_url(); ?>assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet"/>

</head>

<body class="">
<div class="wrapper ">
	<div class="sidebar" data-color="orange">

		<div class="logo">
			<a href="<?php echo base_url() ?>users" class="simple-text logo-normal">
				User Panel
			</a>

		</div>
		<div class="sidebar-wrapper" id="sidebar-wrapper">
			<ul class="nav">
				<li class="active">
					<a href="<?php echo base_url() ?>users">

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
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
						aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-bar navbar-kebab"></span>
					<span class="navbar-toggler-bar navbar-kebab"></span>
					<span class="navbar-toggler-bar navbar-kebab"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navigation">
					<div class="collapse navbar-collapse justify-content-end" id="navigation">

						<p>
							<a href="<?php echo base_url() ?>index">Home</a>
						</p>
					</div>

				</div>
			</div>
		</nav>
		<!-- End Navbar -->
		<div class="panel-header">
			<div class="header text-center">
				<h2 class="title">View Event Details</h2>

			</div>
		</div>
		<div class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="card">


					</div>
				</div>
				<table class="table">
					<thead class=" text-primary">
					<th>#</th>
					<th>Event Name</th>
					<th>Location</th>
					<th>Seats Left</th>
					<th>VIP Ticket Price</th>
					<th>Regular Ticket Price</th>
					<th>Date</th>
					<th>Book Ticket</th>

					</thead>

						<?php
						$count = 1;
						foreach ($allEvents as $event) {
							?>
					<tr>
							<td><?php echo $count ?></td>
							<td><?php echo $event->event_name ?></td>
							<td><?php echo $event->location ?></td>
							<td><?php echo $event->available_seats ?></td>
							<td><?php echo $event->vipTicketPrice ?></td>
							<td><?php echo $event->regularTicketPrice ?></td>
							<td><?php echo date('Y-m-d', strtotime($event->date)) ?></td>
						<?php if($event->available_seats <=0){?>
							<td><a href="<?php echo base_url()?>booking/<?php echo $event->index_ID ?>" class="btn btn-danger btn-outline-primary btn-round disabled">Sold
									Out</a></td>
						<?php }else{ ?>
							<td><a href="<?php echo base_url()?>booking/<?php echo $event->index_ID ?>" class="btn btn-primary btn-outline-primary btn-round">Book
									Now</a></td>
						<?php } ?>

					</tr>


							<?php
							$count++;
						} ?>
					</tbody>
				</table>
			</div>

		</div>
		<footer class="footer" data-background-color="black">
			<div class=" container ">

				<div class="copyright" id="copyright">
					&copy;
					<script>
                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
					</script>
					, Churchill Laugh Industry

				</div>
			</div>
		</footer>
	</div>
</div>
<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>assets/js/core/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/core/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url(); ?>assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url(); ?>assets/demo/demo.js"></script>
</body>

</html>
