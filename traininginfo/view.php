<?php
$id = $_GET['id'];
<<<<<<< HEAD
$link = mysqli_connect("localhost", "root", "479874", "crud01");
=======
$link = mysqli_connect("localhost", "root", "lict@2", "crud01");
>>>>>>> dd1c2428e51392082af555555a0479e7fd0c452a
$query = "SELECT * FROM traininginfo WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
//print_r($row);
?>

<html>
<head>
    <title></title>
</head>
<body style="text-align: center;">
<ul>
    <li><a href="create.php">Create New Record</a> </li>
    <li><a href="list.php">View Full List</a> </li>
</ul>
<table border="1" width="100%">
    <tr>
        <td>ID</td>
<<<<<<< HEAD
        <td>Present Address</td>
        <td>Permanent address</td>
        <td>District</td>
        <td>Home Phone</td>
        <td>Mobile</td>
        <td>Emergency Contact</td>
        <td>Email</td>
        <td>Alternative Email</td>
        <td>Gender</td>
=======
        <td>Training Title</td>
        <td>Description</td>
        <td>Institute</td>
        <td>Address</td>
        <td>Training Year</td>
        <td>Duration</td>
        <td>Start Date</td>
        <td>End Date</td>
        <td>Course Title</td>
        <td>Trainer Detail</td>
>>>>>>> dd1c2428e51392082af555555a0479e7fd0c452a
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
<<<<<<< HEAD
            <td><?php echo $row['present_address']?></td>
            <td><?php echo $row['permanent_address']?></td>
            <td><?php echo $row['district']?></td>
            <td><?php echo $row['home_phone']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['emergency_contact']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['alternative_email']?></td>
            <td><?php echo $row['gender']?></td>
            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |
=======
            <td><?php echo $row['training_title']?></td>
            <td><?php echo $row['description']?></td>
            <td><?php echo $row['institute']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['training_year']?></td>
            <td><?php echo $row['duration']?></td>
            <td><?php echo $row['start_date']?></td>
            <td><?php echo $row['end_date']?></td>
            <td><?php echo $row['course_title']?></td>
            <td><?php echo $row['trainer_detail']?></td>
            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |
                <a href="view.php?id=<?php echo $row['id']?>">View</a></td>
>>>>>>> dd1c2428e51392082af555555a0479e7fd0c452a
        </tr>
    <?php
    }
    ?>
</table>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> dd1c2428e51392082af555555a0479e7fd0c452a