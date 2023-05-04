<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_management";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['AddBook'])) {
  $bname = $_POST['bname'];
  $pname = $_POST['pname'];
  $age = $_POST['age'];
  $date = $_POST['date'];
  $book_type = $_POST['book_type'];

  $sql = "INSERT INTO book_details (bname, pname, age, date, book_type) VALUES 
    ('" . mysqli_real_escape_string($conn, $bname) . "', '" . mysqli_real_escape_string($conn, $pname) . "', " . intval($age) . ", '" . mysqli_real_escape_string($conn, $date) . "', '" . mysqli_real_escape_string($conn, $book_type) . "')";

  if ($conn->query($sql) === TRUE) {
    echo "<h2>New book added successfully!</h2>" .
         "<p>Your book name is: $bname</p>" .
         "<p>Your Publication name is: $pname</p>" .
         "<p>book age is: $age</p>" .
         "<p>Date is: $date</p>" .
         "<p>Book type is: $book_type</p>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}


$conn->close();
?>
