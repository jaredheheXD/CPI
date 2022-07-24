<?php
  $inputid = $_REQUEST['inputid'];
  $exists = 0;

  $servername = "localhost:3307";
  $username = "root";
  $password = "root";
  $dbname = "cpi";
  $conn = new mysqli($servername, $username, $password, $dbname);

  $sql = "SELECT DISTINCT st.studentid, s.name, p.programtitle, u.unitname
          FROM studentterms AS st
          JOIN students AS s ON s.studentid = st.studentid
          JOIN programs AS p ON p.programid = st.programid
          JOIN units AS u ON u.unitid = st.unitid
          WHERE st.studentid = $inputid";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $a = $row["name"];
      $b = $row["studentid"];
      $c = $row["programtitle"];
      $d = $row["unitname"];
      session_start();
      $_SESSION["namedis"] = "$a";
      $_SESSION["studentidis"] = "$b";
      $_SESSION["programtitledis"] = "$c";
      $_SESSION["unitnamedis"] = "$d";
      echo "<script> window.location.href='http://localhost/CPI/formtest.php';</script>";
      // echo "Student ID: " . $row["studentid"] . "<br>";
      // echo " Student Name: " . $row["name"] . "<br>";
      // echo " Program Title: " . $row["programtitle"] . "<br>";
      // echo " Unit Name: " . $row["unitname"] . "<br>";
    }
  }
  else {
    echo "<script>alert('Student ID not found!');
          window.location.href='http://localhost/CPI/logintest.php';
          </script>";
    }
?>
