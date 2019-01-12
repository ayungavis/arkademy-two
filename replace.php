<?php 
	session_start();

	if (isset($_POST['submit'])) {
		$string = $_POST['string'];
		$want_replace = $_POST['want_replace'];
		$replace_with = $_POST['replace_with'];
		if(count(str_split($want_replace)) > 1 || count(str_split($replace_with)) > 1) {
			$_SESSION['result'] = 'Can only one character want to be replaced.';
			die();
		}
		replace($string, $want_replace, $replace_with);
	}

	function replace($string, $want_replace, $replace_with) {
		$array = str_split($string);
		for($i = 0; $i < count($array); $i++) {
			if($array[$i] == $want_replace) {
				$array[$i] = $replace_with;
			}
		}
		return $_SESSION['result'] = '<strong>'. $string .'</strong> replaced to be <strong>'. implode('', $array) .'</strong>';
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
		<title>Replace Character</title>

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
				<h1 class="h3 mb-3 font-weight-normal">Replace Character</h1>
				<p>This page created to answer the question number 4 from <strong>Arkademy Grand Bootcamp 2</strong>.</p>
		  	</div>

		  	<div class="form-label-group">
		  		<input type="text" id="string" class="form-control" name="string" placeholder="Input a string" required>
		  		<label for="string">Input a stirng</label>
		  	</div>

		  	<div class="form-label-group">
				<input type="text" id="want_replace" class="form-control" name="want_replace" placeholder="Character want to replace" required>
				<label for="want_replace">Character want to replace</label>
		  	</div>

		  	<div class="form-label-group">
				<input type="text" id="replace_with" class="form-control" name="replace_with" placeholder="Replace with" required>
				<label for="replace_with">Replace with</label>
		  	</div>

		  	<?php if(isset($_SESSION['result'])) { ?>
			  	<div class="text-center">
			  		<p>Output:</p>
			  		<p><?php echo $_SESSION['result']; unset($_SESSION['result']); ?></p>
			  	</div>
			<?php } ?>

			<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Submit</button>
  			<p class="mt-5 mb-3 text-muted text-center">&copy; 2019 - Wahyu Adi Kurniawan</p>
		</form>
	</body>
</html>