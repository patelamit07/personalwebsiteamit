
<?php
$date=$_GET['date'];
$period=$_GET['period'];
$subject=$_GET['subject'];
$attendence=$_GET['attendence'];
$teacher=$_GET['teacher'];

//echo $fname;
$con=new mysqli("localhost","root","","attedence");
//if($con){echo "connected successfully";}
//else{echo "error";}
$sql="insert into date values('".$date."',".$period.",'".$subject."','".$attendence."','".$teacher."')";

echo $sql;
if($con->query($sql))
{echo "inserted successfully";?>
    <script>alert("Inserted successfully");</script>
    <?php
    header("location:index.html");}
    else {echo "error";}
    ?>
