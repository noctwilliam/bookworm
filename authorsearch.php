 <?php

    if (isset($_POST['search'])) {
        $search = $_POST['valueToSearch'];
        // search in all table columns
        // using LIKE mysql function
        $query = "SELECT * FROM authors WHERE author_id LIKE '&$search&'
        OR author_name LIKE '%$search%'
        OR author_email LIKE '%$search%'";

        $search_result = filterTable($query);
    } else {
        $query = "SELECT * FROM authors";
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
         <form action="authorsearch.php" method="post">

             <table align="center" border="1" width="80%">
                 <thead id="header">
                     <th>Author ID</th>
                     <th>Author Name</th>
                     <th>Author Email</th>
                 </thead>

                 <!-- populate table from mysql database -->
                 <?php while ($row = mysqli_fetch_array($search_result)) : ?>
                     <tr align="center">
                         <td><?= $row['author_id']; ?></td>
                         <td><?= $row['author_name']; ?></td>
                         <td><?= $row['author_email']; ?></td>
                     </tr>
                 <?php endwhile; ?>
             </table>
         </form>
         <br><br><br>
         <a href="authordisplay.php"> <button class="button">Return to author lists</button></a>
     </div>

 </body>

 </html>