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
			echo $logo;
			echo $nav;
		?>
	</header>

	<div class="container">
		<div class="row">
				<div class="col-lg-4 ">
					<div class="box">
						<h2>ABOUT US</h2>
						<h3>Fast Phone Repair</h3>
						<h4>Our Goal is Clear: To become the best Cell Phone Store in the Arlington area.</h4>
						<p>We offer services such as iPhone screen repair, Samsung phone screen repair,
							iPad screen replacement, tablet repair, and more! We provide an unrivaled
							selection of the best quality gadgets, a unique and enjoyable shopping experience,
							and extraordinary customer service. Our comprehensive warranties, free shipping,
							and professional support ensure our customers’ total satisfaction.</p><br>
						</div>
				</div>
				<div class="col-lg-4">
						<div class="box"><img alt="" src="images/Logo.png"></div>
				</div>
	</div>
		<br>
			<div class="row">
				<div class="col-lg-3 photo">
						<div class="box"><img alt="" src="images/iphonerepair1.jpg"></div>
				</div>
				<div class="col-lg-3">
					<h2>Guarantee Satisfaction</h2>
					<p>We offer services such as iPhone screen repair, Samsung phone screen repair, iPad screen
						replacement, tablet repair, and MORE! We provide an unrivaled selection of the best quality gadgets,
					 a unique and enjoyable shopping experience, and extraordinary customer service. Our comprehensive warranties,
					  free shipping, and professional support ensure our customers’ total satisfaction.</p>

				</div>
			</div>
			<br><br>
	</div>

	<?php echo $footer;
	?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>
	<script src="js/app.js">
	</script>
</body>
</html>
