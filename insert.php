<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management Portal</title>
</head>
<body>
    <form action = "insert.php" method="post" enctype="multipart/form-data">
    <h1 align = "center"> Welcome To the Management Portal </h1>
    <h2 align = "center"> Add Users </h2>
    <h3 align = "right"><a href="index.php"> Display All Users </a></h3>
    <table align="center">
        <tr>
            <td> Roll No: </td>
            <td> <input type="number_format" name="rollno" placeholder = "enter roll no" required>
        </tr>
        <tr>
            <td>&nbsp</td>
        </tr>
        <tr>
            <td> Name: </td>
            <td> <input type="text" name="name" placeholder = "enter name" required>
        </tr>
        <tr>
            <td>&nbsp</td>
        </tr>
        <tr>
            <td> Standard: </td>
            <td> <input type="text" name="standard" placeholder = "enter standrad" required>
        </tr>
        <tr>
            <td>&nbsp</td>
        </tr>
        <tr>
            <td> Contact: </td>
            <td> <input type="text" name="contact" placeholder = "enter contact" required>
        </tr>
        <tr>
            <td>&nbsp</td>
        </tr>
        <tr>
            <td> Address: </td>
            <td> <input type="text" name="address" placeholder = "enter address" required>
        </tr>
        <tr>
            <td>&nbsp</td>
        </tr>
        <tr>
            <td colspan="2" align ="center"> <input type="submit" name="submit" value="Submit">
        </tr>
    </table>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $con = mysqli_connect("localhost","root","","management");
    
$rollno = $_POST['rollno'];
$name = $_POST['name'];
$standard = $_POST['standard'];
$contact = $_POST['contact'];
$address = $_POST['address'];

$qry="INSERT INTO `users`(`RollNo`,`Name`,`Standard`,`Contact`,`Address`) 
       VALUES ('$rollno','$name','$standard','$contact','$address')";

$run = mysqli_query($con,$qry);
if($run==true)
{
    ?>
    <script>
        alert('Inserted Sussecfully');
        window.open("index.php","_self");
    </script>
    <?php
}
else
{
    ?>
    <script>
        alert('Something Wrong');
        window.open("insert.php","_self");
    </script>
    <?php

}


}
?>
