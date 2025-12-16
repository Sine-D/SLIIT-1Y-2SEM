<?php
//session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $center = mysqli_real_escape_string($conn, $_POST['center']);
    $fax = mysqli_real_escape_string($conn, $_POST['fax']);
    $id = isset($_POST['id']) ? intval($_POST['id']) : null;

    if ($id) {
        // Update existing record
        $sql = "UPDATE details SET phone_number = '$number', center = '$center', fax = '$fax' WHERE d_id = $id";
    } else {
        // Insert new record
        $sql = "INSERT INTO details (phone_number, center, fax) VALUES ('$number', '$center', '$fax')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Update Successful!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
}

// Fetch record for edit if id is provided in the GET request
$edit_item = null;
if (isset($_GET['id'])) {
    $edit_id = intval($_GET['id']);
    $edit_sql = "SELECT * FROM details WHERE d_id = $edit_id";
    $edit_result = mysqli_query($conn, $edit_sql);
    if ($edit_result) {
        $edit_item = mysqli_fetch_assoc($edit_result);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Items</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>

    <div class="admin-container">
        <header>
            <h1>Admin Dashboard - About Us Admin Panel</h1>
            <nav>
                <ul>
                    <li><a href="conus-admin.php">Contact Us</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </nav>
        </header>

        <h1><?php echo $edit_item ? 'Edit Details' : 'Add Details'; ?></h1>

        <form action="aboutus-admin.php" method="post" enctype="multipart/form-data">
            <?php if ($edit_item): ?>
                <input type="hidden" name="id" value="<?php echo $edit_item['d_id']; ?>">
            <?php endif; ?>

            <label for="number">Phone Number:</label>
            <input type="number" id="number" name="number" value="<?php echo $edit_item ? $edit_item['phone_number'] : ''; ?>" required>

            <label for="center">Our Main Center:</label>
            <input type="text" id="center" name="center" value="<?php echo $edit_item ? $edit_item['center'] : ''; ?>" required>

            <label for="fax">Fax:</label>
            <input type="number" id="fax" name="fax" value="<?php echo $edit_item ? $edit_item['fax'] : ''; ?>" required>

            <button type="submit"><?php echo $edit_item ? 'Update' : 'Add'; ?> Item</button>
        </form>

        <h2>Existing Items</h2>
        <table>
            <tr>
                <th>Phone Number</th>
                <th>Our Main Center</th>
                <th>Fax</th>
                <th>Action</th>
            </tr>
            <?php
            // Fetch and display items
            $sql = "SELECT * FROM details";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$row['phone_number']}</td>
                            <td>{$row['center']}</td>
                            <td>{$row['fax']}</td>
                            <td>
                                <a href='aboutus-admin.php?id={$row['d_id']}'>Edit</a> |
                                <a href='admin-d2.php?id={$row['d_id']}'>Delete</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "Error: " . mysqli_error($conn);
            }

            // Close the database connection after all queries
           
            ?>
        </table>
    </div>
</body>
</html>
