<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coin Flip!</title>
</head>
<body>
    <font size=4 color="blue">Please Pick Heads or Tails!</font>
    <form action="/lab3.2/GotFlip.php" method="POST">
        <input type="radio" name="pick" value=0/> Heads
        <input type="radio" name="pick" value=1/> Tails
        <br/>
        <input type="submit" value="Submit"/>
        <input type="reset" value="Reset"/>
    </form>
</body>
</html>