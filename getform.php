<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "infochaiyo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];





$sql = "INSERT INTO info (name, email, phone) VALUES ('$name', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo"<a href=showalldata.php> <button> Show all Data</button> </a>";
$conn->close();
?>
