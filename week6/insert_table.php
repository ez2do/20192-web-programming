<html>
  <head>
    <title>Insert Table</title>
  </head>
  <body>
    <?php
      $description = $_POST['description'];
      $weight = $_POST['weight'];
      $cost = $_POST['cost'];
      $available = $_POST['available'];
      if ((strlen($description) > 0)
        && (strlen($weight) > 0)
        && (strlen($cost) > 0)
        && (strlen($available) > 0)) {

        $server = "localhost:3306";
        $user = "demo";
        $pass = "password";
        $mydb = 'sale';
        $table_name = 'Products';
        $mysqli = new mysqli($server, $user, $pass, $mydb);
        if ($mysqli->connect_errno) {
          die ("Cannot connect to $server using $user");
          exit();
        } else {
          $SQLcmd = "INSERT INTO $table_name VALUES('0', '$description', '$weight', '$cost', '$available')";
          $mysqli->select_db($mydb);
          print '<br><font size="4" color="blue">';
          if ($mysqli->query($SQLcmd)){
            print "Insert into $database was successful!</font>";
          } else {
            print "Insert into $database failed!</font>";
          } 
          $mysqli->close();
        }
      } else {
        echo "PLEASE fill up all the fields!";
      }
    ?>
  </body>
</html>