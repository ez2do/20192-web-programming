<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DriveDistance</title>
</head>
<body>
        <font size=4 color="blue">Welcome to the distance Calculation Page!</font>
        <br/>
        The page that calculates the distances from Chicago
        <br/>
        Select a destination:
        <form action="/week4/checkDistance.php" method="GET">
            <select name="destination" size=5 multiple>
                <option>Boston</option>
                <option>Dallas</option>
                <option>Miami</option>
                <option>Nashville</option>
                <option>Las Vegas</option>
                <option>Pittsburgh</option>
                <option>San Francisco</option>
                <option>Toronto</option>
                <option>Washington, DC</option>
            </select>
            <br/>
            <input type="submit" value="Submit"/>
            <input type="reset" value="Reset"/>
        </form>
</body>
</html>