<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!--Bootstrap CDN link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <title>Payment_Information</title>
</head>

<body class="neon">
    <section>

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
            <h1>Insert payment</h1>

            <form action="payment_information_insert.php" method="post">
                <p class="form-group" data-aos="fade-right">
                    <label for="Stu_id">Stu_id:</label>
                    <input type="int" name="Stu_id" class="form-control" id="Stu_id" placeholder="Enter your student id">

                </p>
                <p class="form-group" data-aos="fade-right">
                    <label for="Student_Name">Student_Name:</label>
                    <input type="varchar" name="Student_Name" class="form-control" id="Student_Name" placeholder="Enter your student Name">
                </p>
                <p class="form-group" data-aos="fade-right">
                    <label for="Payment_Date">Payment_Date:</label>
                    <input type="date" name="Payment_Date" class="form-control" id="Payment_Date" placeholder="Enter your student payment date">
                </p>

                <p class="form-group" data-aos="fade-right">
                    <label for="Payment_month">Payment_month:</label>
                    <input type="text" name="Payment_month" class="form-control" id="Payment_month" placeholder="Enter your student payment month">
                </p>

                <p class="form-group" data-aos="fade-right">
                    <label for="Amount">Amount:</label>
                    <input type="int" name="Amount" class="form-control" id="Amount" placeholder="Enter your student payment amount">
                </p>

                <p class="form-group" data-aos="fade-right">
                    <label for="Due">Due:</label>
                    <input type="int" name="Due" class="form-control" id="Due" placeholder="Enter your student due payment">
                </p>

                <input type="submit" class="btn btn-info sbmt" value="Submit">
            </form>

        </div>
    </section>

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
