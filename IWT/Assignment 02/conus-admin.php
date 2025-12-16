<?php
//session_start();
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Contact Us Submissions</title>
    <link rel="stylesheet" href="Styles/admin.css">
</head>
<body>
    <div class="admin-container">
        <header>
            <h1>User Dashboard - Contact Us Submissions</h1>
            <nav>
                <ul>
                    <li><a href="aboutus-admin.php">Admin Update</a></li>
                    
                </ul>
            </nav>
        </header>

        <main>
            <section class="submissions">
                <h2>Contact Us Form Submissions</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>V-number</th>
                            <th>E-mail</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example row -->
                        <tr>
                        <?php
                            $sql = "SELECT * FROM contact_us";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                                        <td>{$row['report_id']}</td>
                                        <td>{$row['name']}</td>
                                        <td>{$row['v_no']}</td>
                                        <td>{$row['email']}</td>
                                        <td>{$row['message']}</td>
                                        <td> <a href='admin-d.php?id={$row['report_id']}'>Delete</a></td>
                                    </tr>";
                            }
                            ?>
                        </tr>
                        
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>
