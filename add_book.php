<?php
    include "connect.php";
    if(isset($_POST['AddBook'])){
        $book_name=$_POST['bname'];
        $publication_name=$_POST['pname'];
        $age=$_POST['age'];
        $date=$_POST['date'];
        $book_type=$_POST['book_type'];
        $query="INSERT INTO books (book_name,publication_name,age,date,book_type) VALUES ('$book_name','$publication_name','$age','$date','$book_type')";
        if(mysqli_query($conn,$query)){
            header("location:book_list.php");
        }
        else{
            echo "Error: ".$query."<br>".mysqli_error($conn);
        }
    }
?>
