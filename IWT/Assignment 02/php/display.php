<?php
include 'connect.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link rel="stylesheet" href="display.css">

<body>
    <div class="container">
        <button class="btn-primary"><a href="user.php">Add user</a>
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
                $sql = "select * from `crud`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $name = $row['name'];
                        $num = $row['num'];
                        $email = $row['email'];
                        $vehicle = $row['vehicle'];
                        $message = $row['message'];

                        echo '<tr>
          <td>' . $name . '</td>
          <td>' . $num  .  '</td>
          <td>' . $email . '</td>
          <td>' . $vehicle . '</td>
          <td>' . $message . '</td>
    <td>
        <button class="btn-primary"><a href="update.php?updateid= ' .$num.'">Updatie</a></button>
        <button class="btn-primary"><a href="delete.php?deleteid= ' .$num. ' ">Delete</a></button>
    </td>
        <tr>';
                    }
                }



                ?>

            </tbody>
        </table>
    </div>
</body>

</html>