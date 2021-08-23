 <?php

    if (isset($_POST['search'])) {
        $search = $_POST['valueToSearch'];
        // search in all table columns
        // using LIKE mysql function
        $query = "SELECT * FROM books WHERE bookID LIKE '&$search&'
        OR bookTitle LIKE '%$search%'
        OR bookAuthor LIKE '%$search%'
        OR bookGenre LIKE '%$search%'
        OR bookYear LIKE '%$search%'
        OR bookPrice LIKE '%$search%'
        OR bookPublisher LIKE '%$search%'";

        $search_result = filterTable($query);
    } else {
        $query = "SELECT * FROM books";
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
         <form action="searchby.php" method="post">

             <table align="center" border="1" width="80%">
                 <thead id="header">
                     <th>Book ID</th>
                     <th>Book Title</th>
                     <th>Book Author</th>
                     <th>Book Genre</th>
                     <th>Book Year</th>
                     <th>Book Price</th>
                     <th>Book Publisher</th>
                 </thead>

                 <!-- populate table from mysql database -->
                 <?php while ($row = mysqli_fetch_array($search_result)) : ?>
                     <tr align="center">
                         <td><?= $row['bookID']; ?></td>
                         <td><?= $row['bookTitle']; ?></td>
                         <td><?= $row['bookAuthor']; ?></td>
                         <td><?= $row['bookGenre']; ?></td>
                         <td><?= $row['bookYear']; ?></td>
                         <td><?= $row['bookPrice']; ?></td>
                         <td><?= $row['bookPublisher']; ?></td>
                     </tr>
                 <?php endwhile; ?>
             </table>
         </form>
         <br><br><br>
         <a href="display.php"> <button class="button">Return to homepage</button></a>
     </div>

 </body>

 </html>