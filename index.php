<html>
  <head>
    <title>Book Management System</title>
  </head>
  <body style="background-color:EFFEFB">
    <h1>Book Management System</h1>
    <form method="post" action="add_book.php">
      <label for="bname">Book Name:</label>
      <input type="text" id="bname" name="bname" required>
      <br> <br>
      <label for="Publication Name">Publication Name:</label>
      <input type="text" id="pname" name="pname" required>
      <br> <br>
      <label for="age">Age:</label>
      <input type="number" id="age" name="age" required>
      <br> <br>
      <label for="Date">Date:</label>
      <input type="Date" id="date" name="date" required>
      <br> <br>
      <label>Book Type:</label>
      <select name="book_type">
        <option value="">Select</option>
        <option value="Story Book">Story Book</option>
        <option value="Fiction">Fiction</option>
        <option value="Historical">Historical</option>
        <option value="Science Fiction">Science Fiction</option>
        <option value="Poetry">Poetry</option>
      </select>
      <button type="submit" name="AddBook">Add Book</button>
    </form>
    <br>
    <a href="book_list.php">Book List</a>
  </body>
</html>
