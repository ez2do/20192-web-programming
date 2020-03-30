<html>
  <head>
    <title>Tuna cafe</title>
  </head>
  <body>
    <h2 color="blue">Tuna cafe result received</h2>
    <?php
    $menu = array('Tuna Casserole', 'Tuna Sandwich', 'Tuna Pie', 'Grilled Tuna', 'Tuna Surprise');
    $prefer = $_GET['prefer'];
    if (count($prefer) == 0){
      print "Oh no! Please pick something as your favourite";
    } else {
      print "<br>Your selection were <ul>";
      foreach($prefer as $item){
        print "<li>$menu[$item]</li>";
      }
      print "</ul>";
    }
    ?>
  </body>
</html>