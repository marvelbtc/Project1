<?php
//Database information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";

//create and check db connection 
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}

//create variables for each piece of information to be added to the DB table
$fullname = $_POST["fullname"];
$model = $_POST["model"];   
$email = $_POST["email"];
$phone = $_POST["phone"];
$tdate = $_POST["tdate"];
//create SQL string
$sql = "INSERT INTO booking (fullname,model,email,phone,tdate) VALUES('$fullname','$model','$email','$phone','$tdate')";

//send query, and check to ensure there are no errors
if ($conn->query($sql) === TRUE){
    echo "<script>alert ('Booked!')</script>";
    ?>  
    <META HTTP-EQUIV="Refresh" CONTENT="0;URL=http://localhost/Project3/models.html">   
    <?php
}
else{
    "Error: ". $sql ."<br>" .$conn->error;
}

//close DB connection
$conn->close();

?>