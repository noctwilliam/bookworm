 <?php

    if (isset($_POST['search'])) {
        $search = $_POST['valueToSearch'];
        // search in all table columns
        // using LIKE mysql function
        $query = "SELECT * FROM bookstores WHERE bookstore_id LIKE '&$search&'
        OR bookstore_name LIKE '%$search%'
        OR bookstore_location LIKE '%$search%'";

        $search_result = filterTable($query);
    } else {
        $query = "SELECT * FROM bookstores";
        $search_result = filterTable($query);
    }

    // function to connect and execute the query
    function filterTable($query)
    {
        $connect = mysqli_connect("localhost", "root", "", "bookworm");
        $filter_Result = mysqli_query($connect, $query);
        return $filter_Result;
    }

    ?>

 <!DOCTYPE html>
 <html>

 <head>
     <link rel="stylesheet" type="text/css" href="css/table.css">
     <title>Search</title>
     <style>
         body {
             margin: 100px;
         }
     </style>
 </head>

 <body>
     <div align="center">
         <h1>Search Results</h1>
         <form action="bookstoresearch.php" method="post">

             <table align="center" border="1" width="80%">
                 <thead id="header">
                     <th>Bookstore ID</th>
                     <th>Bookstore Name</th>
                     <th>Bookstore Location</th>
                 </thead>

                 <!-- populate table from mysql database -->
                 <?php while ($row = mysqli_fetch_array($search_result)) : ?>
                     <tr align="center">
                         <td><?= $row['bookstore_id']; ?></td>
                         <td><?= $row['bookstore_name']; ?></td>
                         <td><?= $row['bookstore_location']; ?></td>
                     </tr>
                 <?php endwhile; ?>
             </table>
         </form>
         <br><br><br>
         <a href="bookstoredisplay.php"> <button class="button">Return to bookstore lists</button></a>
     </div>

 </body>

 </html>