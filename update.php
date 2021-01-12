<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<h1 align = "center"> Welcome To the Management Poratal</h1>
<h2 align = "center"> Update Users </h2>

<form action = "update.php" method="post" enctype="multipart/form-data">
<?php 
$con = mysqli_connect("localhost","root","","management");

global $id;

if(!isset($_POST['submit']))
{
    $id = $_GET['id'];

}
    $qry = "SELECT * FROM `users` WHERE `RollNo` = '$id'";

$run = mysqli_query($con,$qry);

if($run==true)
{
    while($data=mysqli_fetch_assoc($run))
    {
?>
    <table align = "center">
    <tr>
            <td>&nbsp</td>
        </tr>
    <tr>
            <td> Roll No: </td>
            <td><input type = "hidden" name = "id" value = "<?php echo $id ?> "> <input type="number_format" name="rollno" value="<?php echo $data['RollNo']?>">
        </tr>
        <tr>
            <td>&nbsp</td>
        </tr>
        <tr>
            <td> Name: </td>
            <td> <input type="text" name="name" value="<?php echo $data['Name']?>">
        </tr>
        <tr>
            <td>&nbsp</td>
        </tr>
        <tr>
            <td> Standard: </td>
            <td> <input type="text" name="standard" value="<?php echo $data['Standard']?>">
        </tr>
        <tr>
            <td>&nbsp</td>
        </tr>
        <tr>
            <td> Contact: </td>
            <td> <input type="text" name="contact" value="<?php echo $data['Contact']?>">
        </tr>
        <tr>
            <td>&nbsp</td>
        </tr>
        <tr>
            <td> Address: </td>
            <td> <input type="text" name="address" value="<?php echo $data['Address']?>">
        </tr>
        <tr>
            <td>&nbsp</td>
        </tr>
        <tr>
            <td colspan="2" align ="center"> <input type="submit" name="submit" value="Update"></td>
        </tr>
    </table>
    <?php
    
    }
}

?>
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
$id = $_POST['id'];
$roll = $_POST['rollno'];
$name = $_POST['name'];
$stnd = $_POST['standard'];
$contact = $_POST['contact'];
$address = $_POST['address'];


$qry = "UPDATE `users` SET `RollNo`='$roll',`Name`= '$name',`Standard`= '$stnd',`Contact`= '$contact',`Address`= '$address' WHERE `RollNo`= '$id'";
$run = mysqli_query($con,$qry);
if($run==true)
{
    ?>
    <script>
    alert("Update Sussecfully");
    window.open('index.php','_self');
    </script>
    <?php
}
}
?>
