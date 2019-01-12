<?php 
	session_start();

	if (isset($_POST['submit'])) {
		$number = $_POST['number'];
		$_SESSION['result'] = count_handshake($number);
	}

	function count_handshake($number) {
		$result = 0;
		if($number == 2) $result = $number - 1;
		if($number == 3) $result = $number;
		if($number > 3) {
			if($number % 2 == 0) {
				$x = $number/2;
				for ($i = 1; $i <= ($number*$x)-$x; $i++) { 
					$result++;
				}
			}
			else {
				$x = $number/2;
				$y = $x-0.5;
				for ($i = 0; $i < $number*$y; $i++) { 
					$result++;
				}
			}
		}
		return $result;
	}
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Wahyu Adi Kurniawan">
		<meta name="generator" content="">
		<title>Handshake</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-1.7.min.js"></script>

		<style>
	  		.bd-placeholder-img {
				font-size: 1.125rem;
				text-anchor: middle;
	  		}

	  		@media (min-width: 768px) {
				.bd-placeholder-img-lg {
		  			font-size: 3.5rem;
				}
	  		}
		</style>
		<!-- Custom styles for this template -->
		<link href="vendor/floating-labels.css" rel="stylesheet">
	</head>
  	<body>
		<form class="form-signin" action="" method="post">
  			<div class="text-center mb-4">
				<h1 class="h3 mb-3 font-weight-normal">Handshake</h1>
				<p>This page created to answer the question number 5 from <strong>Arkademy Grand Bootcamp 2</strong>.</p>
		  	</div>

		  	<div class="form-label-group">
		  		<input type="text" id="number" class="form-control" name="number" placeholder="Number" required>
		  		<label for="number">Number</label>
		  	</div>

		  	<?php if(isset($_SESSION['result'])) { ?>
			  	<div class="text-center">
			  		<p>Output</p>
			  		<p><?php echo $_SESSION['result']; ?></p>
			  	</div>
			  	<?php unset($_SESSION['result']); ?>
			<?php } ?>

			<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Submit</button>
  			<p class="mt-5 mb-3 text-muted text-center">&copy; 2019 - Wahyu Adi Kurniawan</p>
		</form>
	</body>
</html>