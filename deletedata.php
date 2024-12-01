<?php
include('connection.php');
$oldname=$_POST['oldname'];

$queryho="DELETE FROM info WHERE name='$oldname'";
$resultho=mysqli_query($conn,$queryho);

if(!$resultho){
    echo "failed";
}
else{
    echo "Data Successfully deleted";
}
echo"<a href=showalldata.php> <button> Show all Data</button> </a>";
$conn->close();
?>