<?php

$link = mysqli_connect("localhost", "root", "lict@2", "ftfl2nd");

$query = "SELECT * FROM emails";

$result = mysqli_query($link, $query);

?>


<html>
<head>
    <title></title>
</head>

<body style="text-align: center;">

<ul>
    <li><a href="create.email.php">Create New Email Record</a> </li>
    <li><a href="all.php">View Full Email List</a> </li>
    <li><a href="search.php">Search By ID</a> </li>
</ul>


<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>Email</td>
        <td>Time</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['created']?></td>

            <td> <a href="#">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> | <a href="view.php?id=<?php echo $row['id']?>">View</a></td>
        </tr>

    <?php
    }
    ?>

</table>

</body>
</html>