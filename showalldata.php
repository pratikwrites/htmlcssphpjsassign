<?php
include('connection.php');

$sql = "SELECT * FROM info";

$query1= mysqli_query($conn,$sql);
{
    if(mysqli_num_rows($query1)> 0){
        while($row = mysqli_fetch_assoc($query1))
        {
            echo"Name:".$row["name"]."--Email:".$row["email"]."-Phone:".$row["phone"];
            echo"<br>";
        }
        }}  
echo"<a href=update.php><button>Modify Data</button></a> <br>";
echo"<a href=delete.php><button>Delete Data</button></a> <br>";





echo"<a href=form.php><button>Get Back to Form</button></a>";
?>
