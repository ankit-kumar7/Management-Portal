<?php

$con = mysqli_connect("localhost","root","","management");

$id = $_GET['id'];
echo $id;

$qry = "DELETE FROM `users` WHERE `RollNo`='$id'";

$run = mysqli_query($con,$qry);

if($run==true)
 {
         ?><script>
    alert('Delete Sussecfully');
    window.open("index.php","_self");
    </script>
    <?php
}

?>
