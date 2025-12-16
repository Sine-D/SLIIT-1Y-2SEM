<?php
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM contacts WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $num = $_POST['num'];
    $email = $_POST['email'];
    $vehicle = $_POST['vehicle'];
    $message = $_POST['message'];

    $update_stmt = $conn->prepare("UPDATE contacts SET name=?, num=?, email=?, vehicle=?, message=? WHERE id=?");
    $update_stmt->bind_param("sssssi", $name, $num, $email, $vehicle, $message, $id);

    if ($update_stmt->execute()) {
        echo "Record updated successfully";
        header("Location: display.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $update_stmt->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="form.css">
    <title>Update Record</title>
</head>

<body><video autoplay muted loop id="background-video">
        <source src="Bck.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <form method="POST">
        <div class="contact-form">
            <h2>Got Engine Troubles? Ask Your Questions and Get Help!</h2>
            <div class="container">
                <div class="form_box">
                    <div class="input-row">
                        <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
                        <span class="error" style="display:none;">Please Enter Your name</span>
                    </div>
                    <div class="input-row">
                        <input type="text" name="num" value="<?php echo $row['num']; ?>"><br>
                        <span class="error" style="display:none;">Please Enter Engine Number</span>
                    </div>
                    <div class="input-row">
                        <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
                        <span class="error" style="display:none;">Please Enter Your Email</span>
                    </div>
                    <div class="input-row">
                        <input type="text" name="vehicle" value="<?php echo $row['vehicle']; ?>"><br>
                        <span class="error" style="display:none;">What is Your Vehicle Name?</span>
                    </div>
                    <div class="input-row">
                        <textarea name="message"><?php echo $row['message']; ?></textarea><br>
                        <span class="error" style="display:none;">What is Your Trouble?</span>
                    </div>
                    <input type="submit" value="Update">
                </div>
    </form>
    </div>
    </div>
    </form>
</body>

</html>

<?php
$stmt->close();
$conn->close();
?>