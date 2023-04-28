
<?php
session_start();
// check if the user is logged in
if (isset($_SESSION['id']) && isset($_SESSION['username'])){
  
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">

  <title>Document</title>
</head>
<body>
  <h1>HELLO THIS IS A TEST</h1>
</body>
</html>
 
<?php

}
else {
  header("Location: index.php");
  exit();
}

// if the user is logged in, display the submission data
// connect to the database
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'contact_form';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// check for errors
if (!$conn) {
  die('Could not connect to the database: ' . mysqli_connect_error());
}

// query the database for the submission data
$sql = 'SELECT * FROM submissions';
$result = mysqli_query($conn, $sql);

// display the submission data in a table
echo '<h2>Form Submissions</h2>';
echo '<table>';
echo '<tr><th>Name</th><th>Email</th><th>Message</th></tr>';
while ($row = mysqli_fetch_assoc($result)) {
  echo '<tr>';
  echo '<td>' . $row['name'] . '</td>';
  echo '<td>' . $row['email'] . '</td>';
  echo '<td>' . $row['message'] . '</td>';
  echo '</tr>';
}
echo '</table>';

// close the database connection
mysqli_close($conn);
?>
