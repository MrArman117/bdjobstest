<html>
  <head>
    <title>Book List</title>
  </head>
  <body style="background-color:EFFEFB">
    <h1>Book List</h1>
    <table border="1">
      <tr>
        <th>Book Name</th>
        <th>Publication Name</th>
        <th>Age</th>
        <th>Date</th>
        <th>Book Type</th>
        <th>Action</th>
      </tr>
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

        //query database
        $sql = "SELECT * FROM book_details";
        $result = mysqli_query($conn, $sql);

        //display results
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["bname"] . "</td><td>" . $row["pname"] . "</td><td>" . $row["age"] . "</td><td>" . $row["date"] . "</td><td>" . $row["book_type"] . "</td><td><a href='edit_book.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete_book.php?id=" . $row["id"] . "'>Delete</a></td></tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No books found</td></tr>";
        }

  
        mysqli_close($conn);
      ?>
    </table>
    <br>
    <a href="index.php">Back to Home</a>
  </body>
</html>
