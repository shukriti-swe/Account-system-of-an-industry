<?php
$task = $_GET['task'] ?? '';
$seedMsg = '';
$error = '';
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Industry</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<div class="container-fluid">
		<?php
include "nav.php";
?>
		<div class="row">
			<div class="container">
				<div class="col">
					<?php
if ('home' == $task):
?>
					<div class="container">
						<div class="row">
							<div class="col">
								<img src="img/garmentlogo.png" alt="logo">
								<h3 class="text-info py-2">Accounting Section</h3>
								<h4 class="text-success py-2">Services</h4>
								<ul>
									<li><i class="fa fa-angle-double-right fa-2x">Ledger</i></li>
									<li><i class="fa fa-angle-double-right fa-2x">Make Purchase Bill</i></li>
									<li><i class="fa fa-angle-double-right fa-2x">Payroll</i></li>
								</ul>
							</div>
						</div>
					</div>
					<?php endif;?>
					<?php
if ('ledger' == $task):
?>
					<h1>Ledger section coming soon</h1>
					<?php endif;?>
					<?php
if ('bill' == $task):
?>
					<form action="pdf.php" method="POST">
						<div class="conatainer">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="date">Date</label>
										<input type="date" name="date" id="date" class="form-control">
									</div>
									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" placeholder="Purchaser's Name" class="form-control">
									</div>
									<div class="form-group">
										<label for="address">Address</label>
										<input type="text" name="address" id="address" placeholder="Address" class="form-control">
									</div>
									<div class="form-group">
										<label for="mobile">Mobile</label>
										<input type="number" name="mobile" id="mobile" placeholder="Mobile No." class="form-control">
									</div>
									<button type="submit" name="submit" class="btn btn-primary">Get receipt</button>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="item1">Item1</label>
										<input type="text" name="item1" id="item1" class="form-control" placeholder="Item Name">
									</div>
									<div class="form-group">
										<label for="item1price">Item 1 Price</label>
										<input type="number" name="item1price" id="item1price" class="form-control" placeholder="Item1 Price">
									</div>
								</div>
							</div>
						</div>
					</form>
					+
					<?php endif;?>
					<?php
if ('payroll' == $task):
?>
					

                    					<form action="payroll.php" method="POST">
						<div class="conatainer">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="e_cost">Employees Salary cost</label>
										<input type="number" name="e_cost" id="e_cost"  placeholder="Employees Salary Cost" class="form-control">
									</div>
									<div class="form-group">
										<label for="p_cost">Purchased Equipment Cost</label>
										<input type="number" name="p_cost" id="p_cost" placeholder="Purchase Equipment Cost" class="form-control">
									</div>
									<div class="form-group">
										<label for="t_cost">Transport Cost</label>
										<input type="number" name="t_cost" id="t_cost" placeholder="Transport Cost" class="form-control">
									</div>
									<div class="form-group">
										<label for="o_cost">Other Cost</label>
										<input type="number" name="o_cost" id="o_cost" placeholder="Other Cost" class="form-control">
									</div>
									<button type="submit" name="submit" class="btn btn-primary">Click to Pay</button>
								</div>
						        <div class="col-md-6">
									
									<div class="form-group">
										<label for="item1price"><a href="view_payroll_data.php">VIEW PAYROLL DATA</a></label>
										
									</div>
								</div>
								
								</div>
							</div>
						</div>
					</form>

					<?php endif;?>

				</div>
			</div>
		</div>
	</div>






	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/hexagons.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
</body>

</html>