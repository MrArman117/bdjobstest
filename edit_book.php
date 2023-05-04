<?php
// First, check if the book ID has been passed in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $book_id = $_GET['id'];

    // Then, connect to the database
    $db_host = "localhost";
    $db_user = "your_username";
    $db_password = "your_password";
    $db_name = "your_database_name";
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    // If the connection fails, display an error message
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Next, retrieve the book details from the database using the book ID
    $query = "SELECT * FROM books WHERE id = $book_id";
    $result = mysqli_query($conn, $query);

    // If the query fails, display an error message
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    // If the book is found, display the form with the book details
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $book_name = $row['book_name'];
        $publication_name = $row['publication_name'];
        $age = $row['age'];
        $date = $row['date'];
        $book_type = $row['book_type'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form method="post" action="update_book.php">
        <input type="hidden" name="id" value="<?php echo $book_id; ?>">
        <label for="bname">Book Name:</label>
        <input type="text" id="bname" name="bname" value="<?php echo $book_name; ?>" required>
        <br><br>
        <label for="pname">Publication Name:</label>
        <input type="text" id="pname" name="pname" value="<?php echo $publication_name; ?>" required>
        <br><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="<?php echo $age; ?>" required>
        <br><br>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" value="<?php echo $date; ?>" required>
        <br><br>
        <label>Book Type:</label>
        <select name="book_type">
            <option value="">Select</option>
            <option value="Story Book" <?php if ($book_type == "Story Book") echo "selected"; ?>>Story Book</option>
            <option value="Fiction" <?php if ($book_type == "Fiction") echo "selected"; ?>>Fiction</option>
            <option value="Historical" <?php if ($book_type == "Historical") echo "selected"; ?>>Historical</option>
            <option value="Science Fiction" <?php if ($book_type == "Science Fiction") echo "selected"; ?>>Science Fiction</option>
            <option value="Poetry" <?php if ($book_type == "Poetry") echo "selected"; ?>>Poetry</option>
        </select>
        <br><br>
        <button type="submit" name="UpdateBook">Update Book</button
