<?php
session_start();
if(empty($_SESSION['email'])){
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--Bootstrap CDN link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <link rel="stylesheet" href="css/style.css">
    <title>admission_form</title>
</head>

<body class="neon">
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

    <div class="container">
        <br>
        <br>
        <h1>Admit your student</h1>
        <form action="admission_form_insert.php" method="post">
            <div class="form-group" data-aos="fade-right">
                <label for="Student_name">Student_Name</label>
                <input type="varchar" name="Student_name" class="form-control" id="Student_name" placeholder="enter your student_Name">
            </div>
            <div class="form-group" data-aos="fade-right">
                <label for="Fathers_name">Father's Name</label>
                <input type="varchar" name="Fathers_name" class="form-control" id="Fathers_name" placeholder="enter your father's_Name">
            </div>
            <div class="form-group" data-aos="fade-right">
                <label for="Date_of_Birth">Date_of_Birth</label>
                <input type="date" name="Date_of_Birth" class="form-control" id="Date_of_Birth" placeholder="enter your students birthday date">
            </div>
            <div class="form-group" data-aos="fade-right">
                <label for="Sex">Sex</label>
                <input type="text" name="Sex" class="form-control" id="Sex" placeholder="enter your students sex type">
            </div>
            <div class="form-group" data-aos="fade-right">
                <label for="Martial_status">Martial_Status</label>
                <input type="text" name="Martial_status" class="form-control" id="Martial_status" placeholder="enter your student martial status">
            </div>
            <div class="form-group" data-aos="fade-right">
                <label for="Surgery">Surgery</label>
                <input type="text" name="Surgery" class="form-control" id="Surgery" placeholder="Did your student have any surgery?">
            </div>
            <div class="form-group" data-aos="fade-right">
                <label for="Health">Health</label>
                <input type="text" name="Health" class="form-control" id="Health" placeholder="enter your student health status">
            </div>
            <div class="form-group" data-aos="fade-right">
                <label for="Cell">Cell</label>
                <input type="int" name="Cell" class="form-control" id="Cell" placeholder="enter your student cell phone number">
            </div>
            <div class="form-group" data-aos="fade-right">
                <label for="Telephone">Telephone</label>
                <input type="text" name="Telephone" class="form-control" id="Telephone" placeholder="enter your student telephone number">
            </div>
            <div class="form-group" data-aos="fade-right">
                <label for="Present_address">Present address</label>
                <input type="varchar" name="Present_address" class="form-control" id="Present_address" placeholder="enter your student present address">
            </div>
            <div class="form-group" data-aos="fade-right">
                <label for="Permanent_address">Permanent address</label>
                <input type="varchar" name="Permanent_address" class="form-control" id="Permanent_address" placeholder="enter your student permanent_address">
            </div>
            <div class="form-group" data-aos="fade-right">
                <label for="Height">Height</label>
                <input type="varchar" name="Height" class="form-control" id="Height" placeholder="enter your student height">
            </div>
            <div class="form-group" data-aos="fade-right">
                <label for="Joining_weight">Joining weight</label>
                <input type="varchar" name="Joining_weight" class="form-control" id="Joining_weight" placeholder="enter your student joining weight">
            </div>
            <div class="form-group" data-aos="fade-right">
                <label for="Present_weight">Present weight</label>
                <input type="varchar" name="Present_weight" class="form-control" id="Present_weight" placeholder="enter your student present weight">
            </div>
            <div class="form-group" data-aos="fade-right">
                <label for="Desire_weight">Desire weight</label>
                <input type="varchar" name="Desire_weight" class="form-control" id="Desire_weight" placeholder="enter your student desire_weight">
            </div>
            <div class="form-group" data-aos="fade-right">
                <label for="Joining_date">Joining date</label>
                <input type="date" name="Joining_date" class="form-control" id="Joining_date" placeholder="enter your student's joining date in your gym">
            </div>
            <button type="submit" class="btn btn-info sbmt" data-aos="fade-right">Submit</button>
        </form>
    </div>
    <section class="container">
        <footer>
            <p class="developer">
                <i class="fab fa-connectdevelop"> Developed by <strong>Peridot</strong></i>
            </p>
        </footer>

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
