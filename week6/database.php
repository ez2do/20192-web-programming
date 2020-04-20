<html>
<head>
    <title>Create Table</title>
</head>

<?php
    $server = "localhost:3306";
    $user = "demo";
    $pass = "password";
    $db = "demo";
    $table_name = "Products";
    $mysql = new mysqli($server, $user, $pass, $db);

    if ($connect->connect_errorno) {
        die("can not connect to db!");
        exit();
    }

    $query = "CREATE TABLE $table_name(
        ProductID INT UNSIGNED NOT NULL
        AUTO_INCREMENT PRIMARY KEY,
        Product_desc VARCHAR(50),
        Cost INT,
        Weight INT,
        Numb INT)";

    $mysql->select_db($db);
    if ($mysql->query($query)){
        print '<font size="4" color="blue" >Created Table';
        print "<i>$table_name</i> in database<i>$db</i><br></font>";
        print "<br>SQLcmd=$query";
    } else {
        die ("Table Create Creation Failed SQLcmd=$query");
    }
    $mysql->close();
?>

</html>
