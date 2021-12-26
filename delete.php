<?php 
$id = $_GET['id']; // get id through query string
$conn = mysqli_connect('localhost', 'root', '', 'book');

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from booking where id = '$id'", ); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:booklist.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not deleteS
}


?>