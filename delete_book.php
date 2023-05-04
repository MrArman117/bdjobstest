<?php
  //connect to database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "book_management";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $book_id = $_GET["id"];

  $sql = "DELETE FROM book_details WHERE id=$book_id";

  if (mysqli_query($conn, $sql)) {
      echo "Book deleted successfully.";
  } else {
      echo "Error deleting book: " . mysqli_error($conn);
  }

  mysqli_close($conn);
?>
