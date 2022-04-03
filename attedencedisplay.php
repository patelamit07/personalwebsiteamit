
<!DOCTYPE html><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> SAGE ADMISSION WEBSITE</title>
    <link rel="stylesheet" href="addmision2.css">
  </head>
  <body>

    <nav id="navbar">
        <div id="logo">
            <img src="logo_new.png" alt="error">
        </div>

    </nav>
    <div class="top-container">
      <section class="container">
<b>
  <?php
  echo "<h2>Display Attendance records</h2>";
  $con=new mysqli("localhost","root","","attedence");
  $sql="select * from date";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    $i=1;
  echo "<table border='1' width='500px'><tr><th>Sr. No.</th><th>DATE</th><th>LACTURE_NO</th><th>SUBJECT</th><th>ATTENDANCE_STATUS</th><th>TEACHER_NAME</th></tr>";
    while($row = $result->fetch_assoc()) {
  echo "<tr><td>".$i."</td><td>".$row['DATE']."</td><td>".$row['LACTURENO']."</td><td>".$row['SUBJECT']."</td><td>".$row['ATTEDANCE_STATUS']."</td><td>".$row['TEACHER_NAME']."</td><td>";
  $i++;
    }
  }
  ?>

      </b>      </section>
      </div>

    </body>
</html>
