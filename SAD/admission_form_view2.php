<?php
session_start();
if(empty($_SESSION['email'])){
	header("Location:index.php");
}
?>
<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'fdg_database'; // Database Name
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
		die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$sql = 'SELECT *
		FROM admission_form'; //table name
		
$query = mysqli_query($conn, $sql);
if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>

<head>
    <title>admission_form information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body class="neon">

    <section>
        <header class="container" style="background-color:#202525">
            <div class="logo">
                <img src="images/fdg.png" alt="Logo">
            </div>
            <nav class="nav_bar">
                <ul>
                    <li class="active"><a href="success.php">Home</a></li>
                    <li><a class="another_active" href="student_information_view.php">Student list</a></li>
                    <li><a href="payment_information_view.php">Payment list</a></li>
                    <li><a href="equipment_information_view.php">Equipment list</a></li>
                    <li><a href="contact_information_view.php">Student contact</a></li>
                    <li><a href="physique_information_view.php">Physique</a></li>
                    <li><a href="admission_form_view.php">Admission</a></li>
                    <li>
                        <a class="btn btn-danger" href="logout.php">Logut</a></li>
                </ul>
            </nav>
        </header>
    </section>

    <section>
        <div class="container" data-aos="flip-up">
            <br>
            <br>
            <h1>Admission form</h1>
            <div class="back">
                <a class="btn btn-light" href="success.php">Back</a>
            </div>
            <div class="insert">
                <a class="btn btn-success" href="admission_form.php">Admit Student</a>
            </div>
            <div class="inser">
                <a class="btn btn-success" href="admission_form_view2.php">Previous page</a>
            </div>
            <!--table name-->
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <!--<th scope="col">Admission_id</th>
                        <th scope="col">Student_name</th>
                        <th scope="col">Fathers name</th>
                        <th scope="col">Sex</th>
                        <th scope="col">Martial status</th>
                        <th scope="col">Surgery</th>
                        <th scope="col">Health</th>
                        <th scope="col">Cell</th>
                        <th scope="col">Telephone</th>-->
                        <th scope="col">Present_address</th>
                        <th scope="col">Permanent_address</th>
                        <th scope="col">Height</th>
                        <th scope="col">Joining_weight</th>
                        <th scope="col">Present_weight </th>
                        <th scope="col">Desire_weight</th>
                        <th scope="col">Joining_date</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
            while ($row=mysqli_fetch_assoc($query)){
          ?>
                    <tr>
                        <!--<td>
                            <?php echo $row['Admission_id']; ?>
                        </td>
                        <td>
                            <?php echo $row['Student_name']; ?>
                        </td>
                        <td>
                            <?php echo $row['Fathers_name']; ?>
                        </td>
                        <td>
                            <?php echo $row['Sex']; ?>
                        </td>
                        <td>
                            <?php echo $row['Martial_status']; ?>
                        </td>
                        <td>
                            <?php echo $row['Surgery']; ?>
                        </td>
                        <td>
                            <?php echo $row['Health']; ?>
                        </td>
                        <td>
                            <?php echo $row['Cell']; ?>
                        </td>
                        <td>
                            <?php echo $row['Telephone']; ?>
                        </td>-->
                        <td>
                            <?php echo $row['Present_address']; ?>
                        </td>
                        <td>
                            <?php echo $row['Permanent_address']; ?>
                        </td>
                        <td>
                            <?php echo $row['Height']; ?>
                        </td>
                        <td>
                            <?php echo $row['Joining_weight']; ?>
                        </td>
                        <td>
                            <?php echo $row['Present_weight']; ?>
                        </td>
                        <td>
                            <?php echo $row['Desire_weight']; ?>
                        </td>
                        <td>
                            <?php echo $row['Joining_date']; ?>
                        </td>
                        <td>
                            <a class="btn btn-info btn-sm" href="admission_information_indiView.php?Admission_id=<?php echo $row['Admission_id']; ?>">View</a>
                            <a class="btn btn-danger btn-sm" href="admission_delete.php?Admission_id=<?php echo $row['Admission_id']; ?>" onclick="return confirm('Are You sure?')">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>
    </section>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 2000,
        });

    </script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
