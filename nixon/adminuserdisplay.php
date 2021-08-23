<?php
require "conec.php";
$sql = "SELECT * FROM user";
$execute = mysqli_query($conec, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
</head>

<body>
    <br><br><br>
    <h1>Users List</h1>
    <div align="center">
        <form action="authorsearch.php" method="POST">
            <input type="text" name="valueToSearch" placeholder="Search">
            <button type="submit" name="search" class="button">Search</button>
        </form>
        <br><br><br>
    </div>
    <table border="1" width="80%" align="center">
        <thead>
            <th>Users ID</th>
            <th>First Name</th>
            <th>Last Email</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Username</th>
            <th>Actions</th>
        </thead>
        <?php while ($result = mysqli_fetch_array($execute)) { ?>
            <tr align="center">
                <td><?= $result['user_id'] ?></td>
                <td><?= $result['firstname'] ?></td>
                <td><?= $result['lastname'] ?></td>
                <td><?= $result['age'] ?></td>
                <td><?= $result['gender'] ?></td>
                <td><?= $result['email'] ?></td>
                <td><?= $result['username'] ?></td>
                <td>
                    <a href="userupdate.php?user_id=<?= $result['user_id'] ?>"><button class="button">Update</button></a>
                    |
                    <a href="userdelete.php?user_id=<?= $result['user_id'] ?>"><button class="button">Delete</button></a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>