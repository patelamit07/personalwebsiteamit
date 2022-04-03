
<!DOCTYPE html><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> SAGE ADMISSION WEBSITE</title>
    <link rel="stylesheet" href="addmision.css">
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
        echo "<h2>Display  records</h2>";
        $con=new mysqli("localhost","root","","cyberattedance");
        $sql="select * from cyberrecord";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row
          $i=1;
        echo "<table border='1' width='500px'><tr><th>Sr. No.</th><th>Student name</th><th>Branch</th><th>Course</th><th>Rollno.</th><th>Mobile</th><th>Father's Name</th></tr>";
          while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$i."</td><td>".$row['Student name']."</td><td>".$row['Branch']."</td><td>".$row['Course']."</td><td>".$row['Rollno.']."</td><td>".$row['Mobile']."</td><td>".$row['Fathers_Name']."</td></tr>";
        $i++;
          }
        }
        ?>

      </b>      </section>
      </div>

    </body>
</html>
