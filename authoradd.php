<?php
require "conec.php";

if (isset($_POST['save'])) {
    $author_ID = $_POST['authorid'];
    $author_name = $_POST['authorname'];
    $author_email = $_POST['authoremail'];

    $sql = "INSERT INTO authors (author_id,author_name,author_email) VALUES ('$author_ID','$author_name','$author_email')";

    if (mysqli_query($conec, $sql)) {
?>
        <script type="text/javascript">
            alert("Authors succesfully added");
        </script>
<?php
        header('Location:authordisplay.php');
    } else {
        echo "Failed to add authors";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/table.css">
    <title>Author Entry Form</title>
</head>

<body>
    <br><br><br>
    <h1 align="center">Author Entry Form</h1>
    <form action="authoradd.php" method="post">
        <table border="2" width="50%" align="center" id="header">
            <tr>
                <td><label>Author's ID</label></td>
                <td><input type="text" name="authorid" placeholder="Author's ID"></td>
            </tr>
            <tr>
                <td> <label>Author's Name</label></td>
                <td> <input type="text" name="authorname" placeholder="Author's Name"> </td>
            </tr>
            <tr>
                <td> <label>Author's Email</label> </td>
                <td> <input type="email" name="authoremail" placeholder="Author's Email"> </td>
                </div>
            </tr>
            <td colspan="2" align="center"> <input type="submit" name="save" value="Submit"> </td>
            </tr>
        </table>
    </form>

    </table>
</body>

</html>