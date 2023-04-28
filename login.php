<?php
// Start a session to store user information
session_start();

// Check if the user has submitted the login form
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Get the entered username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to the database
    $host = "localhost";
    $user = "root";
    $password_db = "";
    $database = "contact_form";
    $connection = mysqli_connect($host, $user, $password_db, $database);

    // Check if the connection was successful
    if (!$connection) {
        echo "connection Failed";
    }

    // Prepare the SQL query to check if the username and password match a record in the database
    $query = "SELECT * FROM admin_cred WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connection, $query);

    // Check if the query returned a result
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if($row['username']=== $username && $row['password'] === $password) {
            echo "logged In";

            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['logged_in'] = true;

            header('Location: admin.php');
            exit();
        }
        else {
            header("Location: index.php?error=Incorrect username or password");
            exit();
        }
    } else {
        header("Location: index.php");
        exit();
    }
}
