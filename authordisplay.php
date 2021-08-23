<?php
require "conec.php";
$sql = "SELECT * FROM authors";
$execute = mysqli_query($conec, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors List</title>
</head>

<body>
    <br><br><br>
    <h1>Authors List</h1>
    <div align="center">
        <form action="authorsearch.php" method="POST">
            <input type="text" name="valueToSearch" placeholder="Search">
            <button type="submit" name="search" class="button">Search</button>
        </form>
        <br><br><br>
    </div>
    <table border="1" width="80%" align="center">
        <thead id="header">
            <th>Author ID</th>
            <th>Author Name</th>
            <th>Author Email</th>
            <th>Actions</th>
        </thead>
        <?php while ($result = mysqli_fetch_array($execute)) { ?>
            <tr align="center">
                <td><?= $result['author_id'] ?></td>
                <td><?= $result['author_name'] ?></td>
                <td><?= $result['author_email'] ?></td>
                <td>
                    <a href="authorupdate.php?author_id=<?= $result['author_id'] ?>"><button class="button">Update</button></a>
                    |
                    <a href="authordelete.php?author_id=<?= $result['author_id'] ?>"><button class="button">Delete</button></a>
                </td>
            </tr>
        <?php } ?>
        <td colspan="4" align="center">
            <a href="authoradd.php"><button class="button">Add Author</button></a> | <a href="rumahbaru.php"><button class="button">Return to dashbar</button></a>
        </td>
    </table>
</body>

</html>