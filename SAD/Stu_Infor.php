
   <div id="printableArea" style="opacity:0;display:none;visibility:hidden;">
   <h1 style="text-align:center;">Address Information</h1>
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fdg_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM student_information";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
	echo"<table align=center><tr><th>Student id</th><th>Student name</th><th>Father's name</th><th>Date of Birth</th><th>Sex</th><th>Martial Status</th><th>Surgery</th><th>Health</th></tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Stu_id"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Father_nm"]."</td><td>".$row["Date_of_Birth"]."</td><td>".$row["Sex"]."</td><td>".$row["Martial_Status"]."</td><td>".$row["Surgery"]."</td><td>".$row["Health"]."</td></tr>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}

mysqli_close($conn);
     ?>
	 <center><p>Powered by Friends Group</p></center>
	 </div>
          </br><center><button onclick="printDiv('printableArea')"><b>Print</b></button></center>
		  </br>
<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}</script>  
        
    <section class="footer">
Copyright © 2017 Birth certificate management system. All rights reserved.</br>
<h4>Developed by- Friends Group</h4>
    </body>
</html>       