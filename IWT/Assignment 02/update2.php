 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Details</title>
    <link rel="stylesheet" href="style1.2.css">
</head>
<body>
    <h1>Update User Details</h1>
    
    <?php
    // DB connection
    require_once "connection.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $stmt = $conn->prepare("SELECT * FROM user_details WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $name = htmlspecialchars($row['Username']);
            $email = htmlspecialchars($row['Usergmail']);

            // Display the form

            echo "<form action='./update.inc.php' method='POST' class='update-form'>";
            echo "<input type='hidden' name='id' value='" . $id . "'>";
            
            echo "<label for='first-name'>User Name</label><br>";
            echo "<input type='text' id='first-name' name='name' value='" . $name . "' required><br>";

            echo "<label for='email'>Email</label><br>";
            echo "<input type='email' id='email' name='email' value='" . $email . "' required><br>";

            //new password

            echo "<label for='password'>New Password</label><br>";
            echo "<input type='password' id='password' name='password' placeholder='Enter new password'><br>";

            echo "<button type='submit' class='update'>Update</button>";
            echo "</form>";
        } else {
            echo "<p>No record found</p>";
        }

        $stmt->close();
    } else {
        echo "<p>id is missing</p>";
    }
    ?>

</body>
</html>
