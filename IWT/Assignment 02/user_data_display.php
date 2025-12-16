<?php
// Database connection
include 'config.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from database
$sql = "SELECT id, Username, email, number, massage FROM wa";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Display</title>
    <link rel="stylesheet" href="iwt new 1.3.css"> 
</head>
<body>
    <h1>User Data Display Page</h1>
    <table>
        <tr>
            <th>User Id</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>User Phone</th>
            <th>User Message</th>
            <th>Edit</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["Username"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["number"] . "</td>";
                echo "<td>" . $row["massage"] . "</td>";
                echo "<td><a href='update1.php?id=" . $row['id'] . "'>Update</a> | <a href='delete1.php?id=" . $row['id'] . "'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No data available.</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
