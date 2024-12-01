<?php
include('connection.php');

$oldname=$_POST['oldname'];
$newname=$_POST['newname'];
$newgmail=$_POST['newgmail'];
$newphone=$_POST['newphone'];

$update="UPDATE info SET name='$newname',email='$newgmail',phone='$newphone' WHERE name='$oldname'";
$result=mysqli_query($conn,$update);
if(!$result)
{
    echo "failed" . mysqli_error( $conn );

}
else{
    echo "Record Updated Successfully";

}
echo"<a href=showalldata.php> <button> Show all Data</button> </a>";
$conn->close();

?>