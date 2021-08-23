<html>
<head>
<title> search data in textbox</title>
    <center>
    <img src="seating.png" width="500" height="300" >
    </center>
<style>
body
{
    background-color:powderblue;
}
input
{
    width: 40%;
    height: 5%;
    border: 1px;
    border-radius: 05px;
    padding: 8px 15px 8px 15px;
    margin: 10px 0px 15px 0px; 
    box-shadow: 1px 1px 2px 1px grey;
}
</style>

</head>

<body>
    <center>


    <h1>search seats</h1>
    <form action="searchbox.php" methods="POST">
        <input type ="text" name="seats" placeholders="enter seat for availability"/><br/>
        <input type = "submit" name="search" value="search data">
    </form>

    <?php
    include "connection.php";

    if(isset($_POST['search']))
    {
        $seats=$_POST['seats'];
        $query = "SELECT * FROM seatavailability where seats='seats' ";
        $query_run = mysqli_query($connection,$query);

        while($row=mysqli_fetch_array($query_run))
        {
            ?>
            <form action= "" method="POST">
                <input type="text" name="seats" value="<?php echo $row['seats'] ?>"/><br/>
            </form>
        <?php
        }

    }
    ?>
