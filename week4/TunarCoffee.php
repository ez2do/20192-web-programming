<html>
<head>
<title>Tuna cafe</title>
</head>
<body>
  <h2>Welcome to the Tuna Cafe</h2>
  <form action="TunaResults.php" method="GET">
    <?php
    $menu = array('Tuna Casserole', 'Tuna Sandwich', 'Tuna Pie', 'Grilled Tuna', 'Tuna Surprise');
    $bestSeller = 2;
    print "Please indicate all your favourite dishes.<br>";
    for ($i = 0; $i < count($menu); i++){
      print "<input type=\"checkbox\" name=\"prefer[]\"value=$i> $menu[$i]";
      if ($i == $bestSeller){
        print '<h3 color="red"> Our best seller</h3>';
      }
      print "<br>";
    }
    ?>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
  </form>
</body>
</html>