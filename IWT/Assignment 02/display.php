<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="display.css">
    <title>Document</title>
</head>

<body>
<video autoplay muted loop id="background-video">
        <source src="bg2.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <h2>User Panel - You can Edit or Delete Your Details.</h2>
    <div class="container">
        <button class="btn-primary2"><a href="form.html">Add user</a>
        </button>
        <table>
            <thead>
                <tr>
                   
                    <th>Name</th>
                    <th>Engine Number</th>
                    <th>Email</th>
                    <th>Vehicle</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include 'config.php';

                $sql = "SELECT * FROM contacts";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                        
            <td>" . $row['name'] . "</td>
            <td>" . $row['num'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['vehicle'] . "</td>
            <td>" . $row['message'] . "</td>
            <td>
                <button class='btn-primary'><a href='update.php?id=" . $row['id'] . "'>Update</a>  
                <button class='btn-primary1'><a href='delete.php?id=" . $row['id'] . "'>Delete</a>
            </td>
        </tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }

                $conn->close();
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>