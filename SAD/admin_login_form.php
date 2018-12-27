<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>admin_login</title>
</head>

<body>
    <form action="admin_login_insert.php" method="post">
        <p>
            <label for="Admin_id">Admin id :</label>
            <input type="text" name="Admin_id" id="Admin_id">
        </p>
        <p>
            <label for="Admin_name">Admin name :</label>
            <input type="text" name="Admin_name" id="Admin_name">
        </p>
        <p>
            <label for="Password">Password :</label>
            <input type="text" name="Password" id="Password">
        </p>

        <input type="submit" value="Submit">
    </form>
</body>

</html>
