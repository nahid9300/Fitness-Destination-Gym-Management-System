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
			<form action="student_information_insert.php" method="post">
				<div class="form-group">
					<label for="Stu_id">Stu_id</label>
					<input type="int" name="Stu_id" class="form-control" id="Stu_id" placeholder="Enter your student id">
				</div>
				<div class="form-group">
					<label for="Student_Name">Student_Name</label>
					<input type="varchar" name="Student_Name" class="form-control" id="Student_Name" placeholder="enter your student_Name">
				</div>
				<div class="form-group">
					<label for="Father_nm">Father's Name</label>
					<input type="varchar" name="Father_nm" class="form-control" id="Father_nm" placeholder="enter your father's_Name">
				</div>
				<div class="form-group">
					<label for="Date_of_Birth">Date_of_Birth</label>
					<input type="date" name="Date_of_Birth" class="form-control" id="Date_of_Birth" placeholder="enter your students birthday date">
				</div>
				<div class="form-group">
					<label for="Sex">Sex</label>
					<input type="text" name="Sex" class="form-control" id="Sex" placeholder="enter your students sex type">
				</div>
				<div class="form-group">
					<label for="Martial_Status">Martial_Status</label>
					<input type="text" name="Martial_Status" class="form-control" id="Martial_Status" placeholder="enter your student martial_Status">
				</div>
				<div class="form-group">
					<label for="Surgery">Surgery</label>
					<input type="text" name="Surgery" class="form-control" id="Surgery" placeholder="Did your student have any surgery?">
				</div>
				<div class="form-group">
					<label for="Health">Health</label>
					<input type="text" name="Health" class="form-control" id="Health" placeholder="enter your student health status">
				</div>
				
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>