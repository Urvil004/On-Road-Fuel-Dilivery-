<?php
include_once('connection.php');

if (isset($_POST['register'])) {
    // Get and trim the form data
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Validate that none of the fields are empty
    if (empty($name) || empty($username) || empty($password)) {
        echo "<script>alert('All fields are required!');</script>";
    } else {
        // Hash the password
        $pass = md5($password);

        // Prepare the SQL statement to prevent SQL injection
        $sql = "INSERT INTO `tbl_user`(`name`, `username`, `password`) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $name, $username, $pass);

        // Execute the query
        $result = mysqli_stmt_execute($stmt);

        if ($result) { 
            echo "<script>alert('New User Registered Successfully');</script>";
            header('location:index.php');
        } else {
            die(mysqli_error($conn));
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    }
}
?>
