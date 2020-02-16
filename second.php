<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link href="/css/second.css" rel="stylesheet">
		<title>second ex</title>
	</head>
	<body>
		<!-- Optional JavaScript -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script type="text/javascript" src="/js/second.js"></script>
		<div class='generaltitle'>
			<h1>HTML/CSS/JQuery</h1>
		</div>
		<div id='formdiv' class='formdiv'>
			<form>
				<div class="container">
					<div class="row">
						<div class="alert alert-warning collapse" role="alert">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="First name" id="firstname" name="firstname">
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Last name" id="lastname" name="lastname">
						</div>
					</div>
					<div class="row">
						<div class="col">
							<label for="Hand" class="control-label">Select a course:</label>
							
							<select id="mycourse" class=" mycourse selectpicker">JavaScript, PHP, JAVA, C++
								<option id="-1" selected>--Options--</option>
								<option id='0' value="0">JavaScript</option>
								<option id='1' value="1">PHP</option>
								<option id='2' value="2">C++</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<button type="button" id="go_button" class="btn btn-primary">Send</button>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div id='liststudents'>
			<p>
				<div class="container" id='listaestudiantes' name='listaestudiantes'>
					<div class="row">
						<div class="col-md-4 columnname" >First Name</div>
						<div class="col-md-4 columnname">Last Name</div>
						<div class="col-md-4 columnname">Course</div>
					</div>
				</div>
			</div>
		</body>
	</html>