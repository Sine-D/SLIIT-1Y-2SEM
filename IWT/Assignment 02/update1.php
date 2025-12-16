<?php
// Database connection
include 'config.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "SELECT * FROM wa WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Data</title>
    <link rel="stylesheet" href="iwt new 1.2.css"> <!-- Link to external CSS file -->
</head>
<body>
    <h1>Update User Data</h1>
    <form action="update_submit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>User Name:</label>
        <input type="text" name="username" value="<?php echo $row['Username']; ?>"><br><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
        <label>Phone Number:</label>
        <input type="int" name="phone" value="<?php echo $row['number']; ?>"><br><br>
        <label>Message:</label>
        <textarea name="message"><?php echo $row['massage']; ?></textarea><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>

<?php $conn->close(); ?>
