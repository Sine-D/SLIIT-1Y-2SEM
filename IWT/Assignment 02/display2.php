<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User data list</title>
    <link rel="stylesheet" href="style1.1.css">
</head>
<body>
    <h1>User data display page</h1>
    <table>
        <tr>
            <th>User id</th>
            <th>User Name</th>
            <th>User Gmail</th>
            <th>User Password</th>
            <th>Edit</th>
        <tr>
            <?php
            include 'display.inc.php';
            ?>
    </table>
    <script src="script2.js"></script>
</body>
</html>