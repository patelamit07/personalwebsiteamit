<?php
$fname=$_GET['fname'];
$branch=$_GET['branch'];
$course=$_GET['course'];
$rolln=$_GET['rolln'];
$mob=$_GET['mob'];
$ffname=$_GET['ffname'];
//echo $fname;
$con=new mysqli("localhost","root","","cyberattedance");
//if($con){echo "connected successfully";}
//else{echo "error";}
$sql="insert into cyberrecord values('".$fname."','".$branch."','".$course."',".$rolln.",".$mob.",'".$ffname."')";
//echo $sql;
if($con->query($sql))
{echo "inserted successfully";?>
    <script>alert("Inserted successfully");</script>
    <?php
    header("location:cybersecurity.html");}
    else {echo "error";}
    ?>
