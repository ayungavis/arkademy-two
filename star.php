<?php 
	session_start();

	if (isset($_POST['submit'])) {
		star($_POST['star']);
	}

	function star($n) {
		$result = '';
		if($n % 2 != 0) {
			for ($y = 1; $y <= $n; $y++) { 
				for ($x = 1; $x <= $n ; $x++) { 
					if ($x == 1 || $y == 1 || $x == $n || $y == $n || $x == ($n/2)+0.5) {
						$result .= '* ';
					}
					else $result .= '+';
				}
				$result .= '<br/>';
			}
			$_SESSION['result'] = $result;
		}
		else $_SESSION['result'] = 'ERROR: Input must odd number.';
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
		<title>Rectangle Star</title>

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
				<h1 class="h3 mb-3 font-weight-normal">Rectangle Star</h1>
				<p>This page created to answer the question number 3 from <strong>Arkademy Grand Bootcamp 2</strong>.</p>
		  	</div>

		  	<div class="form-label-group">
				<input type="number" id="star" class="form-control" name="star" placeholder="Number" required>
				<label for="star">Number</label>
		  	</div>

		  	<?php if(isset($_SESSION['result'])) { ?>
			  	<div class="text-center">
			  		<p>Output</p>
			  		<p><?php echo $_SESSION['result']; ?></p>
			  	</div>
			  	
			  	<?php unset($_SESSION['result']); ?>
			<?php } ?>

			<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" id="button" disabled>Submit</button>
  			<p class="mt-5 mb-3 text-muted text-center">&copy; 2019 - Wahyu Adi Kurniawan</p>
		</form>

		<script>
			$(document).ready(function() {
				$('input[type=number]').keyup(function() {
					var number = $(this).val();
					// validate number
					if (number.match(/\d/)) {
					    $('#button').removeAttr("disabled");   
					} else {
					    $('#button').attr("disabled", "disabled");
					}
				});
			});

			/*function formSubmit() {
				var n = $('input[type=text]').val();
				$('#output_box').show();
				for (var y = 1; y <= n.length; y++) {
					for (var x = 1; x <= n.length; x++) {
						if (x == y) {
							$('#output').html('*');
						}
						else {
							$('#output').html(' ');
						}
					}
					$('#output').html('<br/>');
				}
			}*/
		</script>
	</body>
</html>