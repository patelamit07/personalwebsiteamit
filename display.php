
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
        $con=new mysqli("localhost","root","","student");
        $sql="select * from user";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row
          $i=1;
        echo "<table border='1' width='500px'><tr><th>Sr. No.</th><th>Student name</th><th>Branch</th><th>Course</th><th>Rollno.</th><th>Mobile</th><th>Father's Name</th></tr>";
          while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$i."</td><td>".$row['sname']."</td><td>".$row['branch']."</td><td>".$row['course']."</td><td>".$row['rolln']."</td><td>".$row['mob']."</td><td>".$row['fathern']."</td></tr>";
        $i++;
          }
        }
        ?>

      </b>      </section>
      </div>

    </body>
</html>
