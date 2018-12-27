<?php
session_start();
if(empty($_SESSION['email'])){
	header("Location:index.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <title>Admin</title>
</head>

<body class="neon" style="background-color: #0e0d0d">
    <section>
        <header class="container" style="background-color:#202525">
            <div class="logo">
                <img src="images/fdg.png" alt="Logo">
                <!--<p>FDG management System</p>-->
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
        <div class="container">
            <br>
            <br>
            <h4 data-aos="zoom-in-up">Hello
                <?php echo $_SESSION['email'];?>
            </h4>
            <br>
            <br>
            <br>
            <div class="flex-container" data-aos="fade-up">
                <div class="student-info" data-aos="fade-up">
                    <div class="stu-icn"><i class="far fa-address-book"></i></div>
                    <a href="student_information_view.php">Student List</a>
                </div>
                <div class="student-info" data-aos="fade-up">
                    <div class="stu-icn"><i class="fas fa-dollar-sign"></i>
                    </div>
                    <a href="payment_information_view.php">Payment</a>
                </div>
                <div class="student-info" data-aos="fade-up">
                    <div class="stu-icn"><i class="fas fa-bolt"></i>
                    </div>
                    <a href="physique_information_view.php">Body Status</a>
                </div>
                <div class="student-info" data-aos="fade-up">
                    <div class="stu-icn"><i class="far fa-registered"></i>
                    </div>
                    <a href="admission_form_view.php">Admission</a>
                </div>
            </div>
        </div>
        <!--<h1>Hello<?php echo $_SESSION['email'];?></h1>
			<a href="../admission_form.php">Student admission</a>
			<br>
			<a href="../equipment_information_form.php">Equipment information insertion</a>
			<br>
			<a href="../payment_information_form.php">Payment information insertion</a>
			<br>
			<a href="logout.php">Logut</a>-->
    </section>
    <section class="container">
        <footer>
            <p class="developer">
                <i class="fab fa-connectdevelop">Developed by <strong>Peridot</strong></i>
            </p>
        </footer>

    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init({
            duration:1000,
        });

    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
