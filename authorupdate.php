<?php
require "conec.php";
$authorid = $_GET['author_id'];
$sql_read = "SELECT * FROM authors WHERE author_id = '$authorid'";
$exe_read = mysqli_query($conec, $sql_read);
$res_read = mysqli_fetch_assoc($exe_read);

if (isset($_POST['update'])) {
    $val_authorid = $_POST['authorid'];
    $val_authorname = $_POST['authorname'];
    $val_authoremail = $_POST['authoremail'];

    $sql = "UPDATE authors SET
        author_id = '$val_authorid',
        author_name = '$val_authorname',
        author_email = '$val_authoremail' WHERE author_id = '$authorid'";

    $execute = mysqli_query($conec, $sql);

    if ($execute) {
?>
        <script type="text/javascript">
            alert("Author updated succesfully");
        </script>
    <?php
        header('Location:authordisplay.php');
    } else {
    ?>
        <script type="text/javascript">
            alert("Author update failed");
        </script>
<?php
        header('Location:authordisplay.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <title>Updating Authors</title>
</head>

<body>
    <br><br><br>
    <div align="center">
        <h1>Updating Author Data</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <table border="1" id="header">
                <tr>
                    <td><label>Bookstore ID</label></td>
                    <td><input type="text" name="authorid" value="<?= $res_read['author_id'] ?>"></td>
                </tr>
                <tr>
                    <td> <label>Book Title</label> </td>
                    <td> <input type="text" name="authorname" value="<?= $res_read['author_name'] ?>"> </td>
                </tr>
                <tr>
                    <td> <label>Book Author</label> </td>
                    <td> <input type="email" name="authoremail" value="<?= $res_read['author_email'] ?>"> </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="update" value="Update" class="button"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>