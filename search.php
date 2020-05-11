<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM humms WHERE CONCAT (lrn, firstname, lastname, middlename) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
 else {
    $queryqew = "SELECT * FROM humms";
    $search_result = filterTable($queryqew);
}

// function to connect and execute the query
function filterTable($queryqew)
{
    $connect = mysqli_connect("localhost", "root", "", "registration_db");
    $filter_Result = mysqli_query($connect, $queryqew);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>

        <form action="search.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>

            <table>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['lrn'];?></td>
                    <td><?php echo $row['firstname'];?></td>
                    <td><?php echo $row['lastname'];?></td>
                    <td><?php echo $row['middlename'];?></td>
                    <td><?php echo $row['date_of_birth'];?></td>
                    <td><?php echo $row['Gender'];?></td>
                    <td><?php echo $row['school'];?></td>
                    <td><?php echo $row['section'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>

    </body>
</html>
