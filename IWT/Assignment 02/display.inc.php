<?php
//DB Connection
require_once "./connection.php";

// Retrieve data
$sql = "SELECT * FROM user_details";
$result = $conn->query($sql); 

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = htmlspecialchars($row["id"]);
        $username = htmlspecialchars($row["Username"]);
        $email = htmlspecialchars($row["Usergmail"]);
        $password = htmlspecialchars($row["Userpassword"]);

        echo "<tr>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $username . "</td>";
        echo "<td>" . $email . "</td>";
        echo "<td>" . $password . "</td>";
        echo "<td>";
        echo "<button onClick=\"redirectToUpdateForm(" . $id . ")\">Update</button>";
        echo "<a href=\"delete2.php?delete_id=" . $id . "\"> Delete </a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "No data available";
}

// Close the connection
$conn->close();
?>
