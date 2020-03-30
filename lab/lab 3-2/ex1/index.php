<html>
  <head>
    <title>Coin flip result</title>
  </head>
  <body>
    <?php
    srand((double) microtime() * 10000000);
    $flip = rand(0,1);
    $pick = $_POST['pick'];

    if($flip == $pick){
      print('<p color="blue">You got it right</p>');
    } else {
      print('<p color="red">You got it wrong</p>');
    }
    ?>
  </body>
</html>