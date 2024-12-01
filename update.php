<!DOCTYPE html>
<html lang="en">
<head></head>
    <title>Document</title>
</head>
<body>
    <form action="updatedata.php" method="POST">
        <label for="oldname">Enter Name whose data you want to update</label><input type="text" id="oldname" name="oldname"><br>
        <label for="newname">Enter New Name</label><input type="text" id="newname" name="newname"><br>
        <label for="newgmail">Enter New Gmail</label><input type="text" id="newgmail" name="newgmail"><br>
        <label for="newphone">Enter New Phone</label><input type="tel" id="newphone" name="newphone"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>