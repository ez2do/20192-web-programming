<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $first = $_GET["firstname"];
    $middle = $_GET["middle"];
    $last = $_GET["lastname"];

    if ($first < $last) {
        print("$first is less than $last");
    }
    
    if ($first > $last) {
        print("$first is greater than $last");
    }

    print("<br/> <br/>");

    $grade1 = $_GET["grade1"];
    $grade2 = $_GET["grade2"];
    $final = (2*$grade1 + 3*$grade2) / 5;

    if ($final > 89) {
        print("Your final grade is $final. You got an A");
    } elseif ($final > 79) {
        print("Your final grade is $final. You got an B");
    } elseif ($final > 69) {
        print("Your final grade is $final. You got an C");
    } elseif ($final > 59) {
        print("Your final grade is $final. You got an D");
    } elseif ($final > 0) {
        print("Your final grade is $final. You got an F");
    } else {
        print("Illigal grade less than 0. Final grade = $final");
    } 
?>
</body>
</html>