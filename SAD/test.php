<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!--Bootstrap CDN link-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<!--<link rel="stylesheet" href="css/style.css">-->
		<title>Date_Information</title>
	</head>
	<body>
		<!--<section class="bgrnd">-->
		<div class="container">
			<form action="equipment_information_insert.php" method="post">
				<div class="form-group">
					<label for="Equipment_id">Equipment_id</label>
					<input type="int" name="Equipment_id" class="form-control" id="Equipment_id" placeholder="Enter your equipment id">
				</div>
				<div class="form-group">
					<label for="Equipment_Name">Equipment_Name</label>
					<input type="text" name="Equipment_Name" class="form-control" id="Equipment_Name" placeholder="enter your equipment name">
				</div>
				<div class="form-group">
					<label for="Quantity">Quantity</label>
					<input type="int" name="Quantity" class="form-control" id="Quantity" placeholder="enter your Quantity name">
				</div>
				<div class="form-group">
					<label for="Availability">Availability</label>
					<input type="varchar" name="Availability" class="form-control" id="Availability" placeholder="enter Availability">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</section>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>