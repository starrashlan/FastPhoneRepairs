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
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
	<title>Fast Phone Repair</title>
	<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header>
		<?php
			echo $nav;
		?>
	</header>

	<div class="popup hidden" id="success">
			<div class="popup-container">
				<button class="popup-close">x</button> <img alt="Guy leaning against giant envelope with a green check mark above it." src="images/logo1.png">
				<h2>Thank You</h2>
				<p>Your message has been sent.</p>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-lg-5">
					<div class="contact-image-container">
						<div class="home-contact-image">
							<picture><source media="(max-width: 992px)" srcset="images/onthephone.jpg"> <source media="(min-width: 576px)" srcset="images/onthephone2.jpg"> <img alt="Girl looking at phone." src="images/onthephone.jpg"></picture>
						</div>
					</div>
				</div>

				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-4">
					<div class="home-form">
						<h2>Submit Request</h2>
						<hr>
						<form action="/form" id="contact" method="post" name="contact">
							<fieldset>
								<div class="form-row">
									<div class="form-group">
										<label for="fullName">Full Name</label> <input class="form-control" id="fullName" name="fullName" required="" type="text">
									</div>
									<div class="form-group">
										<label for="phone">Phone Number</label> <input class="form-control" id="phone" name="phone"required="" type="text">
									</div>
									<div class="form-group">
										<label for="phone">Email</label> <input class="form-control" id="email" name="email"  required="" type="text">
									</div>
									<div class="form-group">
										<label for="message">Message</label>
										<textarea class="form-control" id="message" name="message" rows="8"></textarea>
									</div>
								</div>
							</fieldset>
							<div class="form-row">
								<div class="form-group">
									<div class="home-submit">
										<input class="btn btn-primary popup-handler" data-target="#success" id="submit" name="submit" type="submit" value="Get Quote Now">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
					<div class="banner col-xs-9">
						<img alt="banner" src="images/banner1.jpg">
					</div>

					<?php echo $footer;
					?>

		</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>
	<script src="js/app.js">
	</script>
</body>
</html>
