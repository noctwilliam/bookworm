<?php
require "conec.php";
$sql = "SELECT * FROM bookstores";
$execute = mysqli_query($conec, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstores List</title>
</head>

<body>
    <br><br><br>
    <h1>Bookstores List</h1>
    <div align="center">
        <form action="bookstoresearch.php" method="POST">
            <input type="text" name="valueToSearch" placeholder="Search">
            <button type="submit" name="search" class="button">Search</button>
        </form>
        <br><br><br>
    </div>
    <table border="1" width="80%" align="center">
        <thead id="header">
            <th>Bookstore ID</th>
            <th>Bookstore Name</th>
            <th>Bookstore Location</th>
            <th>Actions</th>
        </thead>
        <?php while ($result = mysqli_fetch_array($execute)) { ?>
            <tr align="center">
                <td><?= $result['bookstore_id'] ?></td>
                <td><?= $result['bookstore_name'] ?></td>
                <td><?= $result['bookstore_location'] ?></td>
                <td>
                    <a href="bookstoreupdate.php?bookstore_id=<?= $result['bookstore_id'] ?>"><button class="button">Update</button></a>
                    |
                    <a href="bookstoredelete.php?bookstore_id=<?= $result['bookstore_id'] ?>"><button class="button">Delete</button></a>
                </td>
            </tr>
        <?php } ?>
        <td colspan="4" align="center">
            <a href="bookstoreadd.php"><button class="button">Add Bookstore</button></a> | <a href="rumahbaru.php"><button class="button">Return to dashbar</button></a>
        </td>
    </table>
</body>

</html>