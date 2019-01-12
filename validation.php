<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Wahyu Adi Kurniawan">
		<meta name="generator" content="">
		<title>Username & Password Validation</title>

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

	  		.invalid {
			    padding-left:22px;
			    line-height:24px;
			    color:#ec3f41;
			}
			.valid {
			    padding-left:22px;
			    line-height:24px;
			    color:#3a7d34;
			}

			#username_info {
			    position:absolute;
			    bottom:-56px;
			    bottom: -115px\9; /* IE Specific */
			    right:-340px;
			    width:330px;
			    padding:15px;
			    background:#fefefe;
			    font-size:.875em;
			    border-radius:5px;
			    box-shadow:0 1px 3px #ccc;
			    border:1px solid #ddd;
			    display: none;
			}

			#username_info h4 {
			    margin:0 0 10px 0;
			    padding:0;
			    font-weight:normal;
			}

			#username_info::before {
			    content: "\25C2";
			    position:absolute;
			    top:50%;
			    left:-18px;
			    font-size:30px;
			    line-height:14px;
			    color:#ddd;
			    text-shadow:none;
			    display:block;
			}

	  		#password_info {
			    position:absolute;
			    bottom:-80px;
			    bottom: -115px\9; /* IE Specific */
			    right:-340px;
			    width:330px;
			    padding:15px;
			    background:#fefefe;
			    font-size:.875em;
			    border-radius:5px;
			    box-shadow:0 1px 3px #ccc;
			    border:1px solid #ddd;
			    display: none;
			}

			#password_info h4 {
			    margin:0 0 10px 0;
			    padding:0;
			    font-weight:normal;
			}

			#password_info::before {
			    content: "\25C2";
			    position:absolute;
			    top:50%;
			    left:-18px;
			    font-size:30px;
			    line-height:14px;
			    color:#ddd;
			    text-shadow:none;
			    display:block;
			}
			
		</style>
		<!-- Custom styles for this template -->
		<link href="vendor/floating-labels.css" rel="stylesheet">
	</head>
  	<body>
		<form class="form-signin" action="" method="post">
  			<div class="text-center mb-4">
				<h1 class="h3 mb-3 font-weight-normal">Username & Password Validation</h1>
				<p>This page created to answer the question number 2 from <strong>Arkademy Grand Bootcamp 2</strong>.</p>
		  	</div>

		  	<div class="form-label-group">
				<input type="text" id="username" class="form-control" name="username" placeholder="Username" required>
				<label for="username">Username</label>
				<div id="username_info">
				    <p>Username must meet the following requirements:</p>
				    <ul>
				        <li id="user_lower" class="invalid">Must use <strong>lowercase letter</strong></li>
				        <li id="user_underscore" class="invalid">Must have <strong>underscore character</strong></li>
				        <li id="user_length" class="invalid">Be at least <strong>8 characters</strong></li>
				    </ul>
				</div>
		  	</div>

		  	<div class="form-label-group">
				<input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
				<label for="password">Password</label>
				<div id="password_info">
				    <p>Password must meet the following requirements:</p>
				    <ul>
				        <li id="pwd_letter" class="invalid">At least <strong>one lowercase letter</strong></li>
				        <li id="pwd_capital" class="invalid">At least <strong>one uppercase letter</strong></li>
				        <li id="pwd_number" class="invalid">At least <strong>one number</strong></li>
				        <li id="pwd_special" class="invalid">At least <strong>one special character</strong></li>
				        <li id="pwd_length" class="invalid">Be at least <strong>8 characters</strong></li>
				    </ul>
				</div>
		  	</div>

			<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Submit</button>
  			<p class="mt-5 mb-3 text-muted text-center">&copy; 2019 - Wahyu Adi Kurniawan</p>
		</form>

		<script>
			$(document).ready(function() {
				$('#password').keyup(function() {
				    var password = $(this).val();
					// validate the length
					if (password.length < 8) {
					    $('#pwd_length').removeClass('valid').addClass('invalid');
					} else {
					    $('#pwd_length').removeClass('invalid').addClass('valid');
					}

					// validate letter
					if (password.match(/[a-z]/)) {
					    $('#pwd_letter').removeClass('invalid').addClass('valid');
					} else {
					    $('#pwd_letter').removeClass('valid').addClass('invalid');
					}

					// validate capital letter
					if (password.match(/[A-Z]/)) {
					    $('#pwd_capital').removeClass('invalid').addClass('valid');
					} else {
					    $('#pwd_capital').removeClass('valid').addClass('invalid');
					}

					// validate number
					if (password.match(/\d/)) {
					    $('#pwd_number').removeClass('invalid').addClass('valid');
					} else {
					    $('#pwd_number').removeClass('valid').addClass('invalid');
					}

					// validate special characters
					if (password.match(/[!*^?()?=.*\+\-\_\@\#\$\%\&]/)) {
						$('#pwd_special').removeClass('invalid').addClass('valid');
					} else {
						$('#pwd_special').removeClass('valid').addClass('invalid');
					}
				}).focus(function() {
				    $('#password_info').show();
				}).blur(function() {
				    $('#password_info').hide();
				});

				$('#username').keyup(function() {
				    var username = $(this).val();
					// validate the length
					if (username.length < 8) {
					    $('#user_length').removeClass('valid').addClass('invalid');
					} else {
					    $('#user_length').removeClass('invalid').addClass('valid');
					}

					// validate letter
					if (username.match(/[A-Z]/)) {
					    $('#user_lower').removeClass('valid').addClass('invalid');
					} else {
					    $('#user_lower').removeClass('invalid').addClass('valid');
					}

					// validate special characters
					if (username.match(/[\_]/)) {
						$('#user_underscore').removeClass('invalid').addClass('valid');
					} else {
						$('#user_underscore').removeClass('valid').addClass('invalid');
					}
				}).focus(function() {
				    $('#username_info').show();
				}).blur(function() {
				    $('#username_info').hide();
				});
			});
		</script>
	</body>
</html>