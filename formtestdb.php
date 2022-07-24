<?php
      $contactnum = $_REQUEST['contactnum'];
      $counselor = $_REQUEST['counselor'];
      $date = $_REQUEST['date'];
      $description = $_REQUEST['description'];
      $time1 = $_REQUEST['time1'];
      $time2 = $_REQUEST['time2'];
      $time3 = $_REQUEST['time3'];

      $servername = "localhost:3307";
      $username = "root";
      $password = "root";
      $dbname = "cpi";

      $conn = new mysqli($servername, $username, $password, $dbname);

      session_start();
      $a = $_SESSION["namedis"];
      $b = $_SESSION["studentidis"];
      $c = $_SESSION["programtitledis"];
      $d = $_SESSION["unitnamedis"];

      $sql = "INSERT INTO appointments (name, programtitle, unitname, studentid, contactnum,
      counselor, date, description, time1, time2, time3) VALUES ('$a', '$c',
      '$d', '$b', '$contactnum', '$counselor',
      '$date', '$description', '$time1', '$time2','$time3')";

      if(mysqli_query($conn, $sql)){
        echo "<script>alert('Appointment form sent!');
              window.location.href='http://localhost/CPI/logintest.php';
              </script>";
      }
      else{
      echo "<script>alert('Error!');
            window.location.href='http://localhost/CPI/formtest.php';
            </script>";
      }

      mysqli_close($conn);
?>
