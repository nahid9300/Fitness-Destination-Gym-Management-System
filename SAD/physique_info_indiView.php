<?php
$Stu_id=$_GET['Stu_id'];
$con = mysqli_connect('localhost','root','','fdg_database');
$sql="SELECT * FROM physique_information WHERE Stu_id=$Stu_id";
$query=mysqli_query($con, $sql);
$physique_information=mysqli_fetch_assoc($query);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Physique info</title>
</head>

<body>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-2">
                <br>
                <a href="physique_information_view.php" class="btn btn-success">Back</a>
            </div>
            <div class="col-md-8">

                <h1>Physique information</h1>
                <table class="table">
                    <tr>
                        <th class="text-right">ID:</th>
                        <td>
                            <?php echo $physique_information['Stu_id'];?>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-right">Student name:</th>
                        <td>
                            <?php echo $physique_information['Student_name'];?>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-right">Height:</th>
                        <td>
                            <?php echo $physique_information['Height'];?>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-right">Joining weight:</th>
                        <td>
                            <?php echo $physique_information['Joining_weight'];?>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-right">Present weight:</th>
                        <td>
                            <?php echo $physique_information['Present_weight'];?>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-right">Desire weight:</th>
                        <td>
                            <?php echo $physique_information['Desire_weight'];?>
                        </td>
                    </tr>
                </table>
                <button class="btn btn-outline-secondary" onclick="myFunction()">Print this page</button>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            window.print();
        }

    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
