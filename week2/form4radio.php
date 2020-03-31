<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>week2</title>
</head>
<body>
    <font size="5">Thank You: Got Your Input</font>
    <?php
        $email = $_POST["email"];
        $contact = $_POST["contact"];
        echo "<br/> Your email address : $email";
        echo "<br/> Contact preference : $contact"
    ?>
</body>
</html>