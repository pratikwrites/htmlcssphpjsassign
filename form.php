<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <script src="script.js"></script> -->
    <title>Form Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // echo json_decode($_POST['message']);
        if (isset($_POST['message'])) {
            echo '<div>'. $_POST['message'] .'</div>';
        }
    ?>
    <header>
        <h1>Fill out the Form</h1>
    </header>
    <div class="form1">
    <form action="getform.php" method="POST" name="pratikform" id="validate-form">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" ><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address"><br><br>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>
        
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone"><br><br>
        
        <button type="submit" name="action" value="insert">Submit</button>
    </form>
    </div>
    

    <br>
    <div>
        <a href="showalldata.php">
            <button>Show all records</button>
        </a>
    </div>
    <br>
    <div>
        <a href="homepage.php">
            <button>Homepage</button>
        </a>
    </div>

    <script src="script.js"></script>
</body>
</html>