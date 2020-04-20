<?php
  $config = include('../config.php');
?>
<html>
  <head>
    <title>Query Table</title>
  </head>
  <body>
    <?php
      if (!isset($_POST['product'])) {
        exit();
      }
      $product = $_POST['product'];
      if (strlen($product) == 0) {
        exit();
      }
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
        $SQLcmd = "SELECT * FROM $table_name WHERE (Product_desc = '$product')";
        $mysqli->select_db($mydb);
        $results = $mysqli->query($SQLcmd);
        if ($results){
          print '<table border=1>';
          print '<th>Num<th>Product<th>Cost<th>Weight<th>Count';
          while($row = mysqli_fetch_row($results)) {
            print "<tr>";
            foreach($row as $field) {
              print "<td>$field</td>";
            }
            print "<tr/>";
          }
        } else {
          die ("Query Failed, SQLcmd=$SQLcmd");
        } 
        $mysqli->close();
      }
    ?>
  </body>
</html>
