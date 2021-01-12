<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management Portal </title>
</head>
<body>
<h1 align = "center"> Welcome To the Management Poratal </h1>
<h3 align = "right"><a href="insert.php"> Add Users </a></h3>
<form action = "index.php" method="post" enctype="multipart/form-data">
    <!-- <table align = "center"> -->
    <?php
        $con = mysqli_connect("localhost","root","","management");
        $query = "SELECT * FROM users";
        $run = mysqli_query($con,$query);
        if($run==true)
        {
            ?>
            <table align="center" width="80%" border=1>
            <tr >
               <th > No. </th>
               <th> RollNo </th>
               <th> Name </th>
               <th> Standard </th>
               <th> Conatct </th>
               <th> Address </th>
               <th> Your choice </th>
           </tr>
         <?php
            $count=1;
            while($data = mysqli_fetch_assoc($run))
            {
             ?>
             <tr align = "center">
                <td><?php echo $count ?></td>
                <td><?php echo $data['RollNo']; ?></td>
                <td><?php echo $data['Name']; ?></td>
                <td><?php echo $data['Standard']; ?></td>
                <td><?php echo $data['Contact']; ?></td>
                <td><?php echo $data['Address']; ?></td>
                <td><a href = "update.php?id=<?php echo $data['RollNo']?>">Update Record </a>&nbsp&nbsp&nbsp<a href = "delete.php?id=<?php echo $data['RollNo']?>">Delete Record </a></td>
                </tr>
            <?php
            $count = $count+1;
            }
            if($count == 1)
            {
                ?>
                <tr>
                    <th colspan="7" >No data found.</th>
                    </tr>
                </table>
                    <?php
            }
            ?>

            <?php
            // header('location: update.php');
        }

     ?>
</body>
</html>



















