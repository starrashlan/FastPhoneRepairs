<?php
	include ('shared.inc.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta content="Description goes here" name="description">
	<meta content="HTML, CSS, XML, JavaScript" name="keywords">
	<meta content="Fast Phone Repair" name="author">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,700i,900&display=swap" rel="stylesheet">
	<title>Fast Phone Repair</title>
	<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>

	<header>
		<?php
			echo $nav;
		?>
	</header>

	<div class="container">
		<div class="row">
				<div class="col-lg-9 herocareer">
					<div class="section boxes">
						<h2>Need help repairing your phone?</h2>
						<p>Fast Phone Repair offers a full range of repair options for all mobile devices.</p><a href="contact.html" title="Quote"><button class="herocareer-button">Get Quote Now</button></a>
					</div>
				</div>
	</div>

			<div class="row">
				<div class="col-md-9 services-header">
					<h2>OUR SERVICES</h2>
					<hr>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3 services-boxes">
					<div class="box"><img alt="Screen Replacement" src="images/screenreplacement1.jpg"> <img class="hover-img" src="images/screenreplacement2.jpg"></div>
				</div>
				<div class="col-md-3 services-boxes">
					<div class="box"><img alt="iPhone Repair" src="images/iphonerepair1.jpg"> <img class="hover-img" src="images/iphonerepair2.jpg"></div>
				</div>
				<div class="col-md-3 serices-boxes">
					<div class="box"><img alt="Smart Phone Repair" src="images/smartphonerepair1.jpg"> <img class="hover-img" src="images/smartphonerepair2.jpg"></div>
				</div>
			</div>
	</div>

	<div class="row">
				<div class="banner col-xs-9">
					<img alt="banner" src="images/banner1.jpg">
				</div> <br>
	</div>
				<div class='hour col-xs-4'>
					<ul> Business Hours
						<li> Monday: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <?php echo $weekday;?> </li>
						<li> Tuesday:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <?php echo $weekday;?> </li>
						<li> Wednesday: &nbsp; &nbsp;<?php echo $weekday;?> <li>
						<li> Thursday:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $weekday;?> </li>
						<li> Friday:    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $weekday;?> </li>
						<li> Saturday:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $weekend;?> </li>
						<li> Sunday:    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $weekend;?> </li>
					</ul>
				</div>



	<?php echo $footer;
	?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>
	<script src="js/app.js">
	</script>
</body>
</html>
