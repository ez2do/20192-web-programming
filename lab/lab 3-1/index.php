<html>
  <head>
    <title>Conditional Test</title>
  </head>
  <body>
    <?php
    $first = $_POST['firstName'];
    $last = $_POST['lastName'];
    print("Hi $first, your full name is $first $last. <br>");
    if ($first == $last){
      print("$first and $last is the same");
    } else if ($first < $last){
      print("$first is less than your $last");
    } else {
      print("$first is greater than $last");
    }
    print("<br>");

    $grade1 = $_POST['grade1']; $grade2 = $_POST['grade2'];
    $final = (2 * $grade1 + 3 * $grade2) / 5;
    switch($final){
      case $final > 89:
        print("Your final is $final. You got an A.");
      break;
      case $final > 79:
        print("Your final is $final. You got an B.");
      break;
      case $final > 69:
        print("Your final is $final. You got an C.");
      break;
      case $final > 59:
        print("Your final is $final. You got an D.");
      break;
      case $final > 0:
        print("Your final is $final. You got an F. Congratulation");
      break;
      default:
        print("Invalid grade");
      break;
    }
    ?>
  </body>
</html>