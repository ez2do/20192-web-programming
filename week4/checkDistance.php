<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckDistance</title>
</head>
<body>
    <?php
        $cities = array(
            "Dallas" => 803,
            "Toronto" => 436,
            "Boston" => 848,
            "Nashville" => 406,
            "Las Vegas" => 1526,
            "San Francisco" => 1835,
            "Washington, DC" => 595,
            "Miami" => 1189,
            "Pittsburgh" => 409
        );

        $destination = $_GET["destination"];
        
        if (isset($cities[$destination])) {
            $distance = $cities[$destination];
            $time = round($distance / 60, 2);
            $walktime = round($distance / 5, 2);
            print("The distance between Chicago and <I>$destination</I> is $distance miles.");
            print("<br/> Driving at 60 mile/h it would take $time hours.");
            print("<br/> Walking at 5 mile/h it would take $walktime hours.");
        } else {
            print("Sorry, do not have the destination information for $destination");
        }
    ?>
</body>
</html>