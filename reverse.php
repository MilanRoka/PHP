<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse Number</title>
</head>
<body>
    <form method="post">
        Enter the number to reverse:
        <input type="number" name="number" placeholder="Your number here..">
        <input type="submit" value="Submit" />
    </form>    
    <?php
    if ($_POST['number']) {
        $number = $_POST['number'];
        $rev = 0;
        $x = $number;
        while ($x != 0) {
            $rem = $x % 10;
            $rev = ($rev * 10) + $rem;
            $x = (int)($x / 10);
        }
        echo "Reverse of $number is $rev";
    }
    ?>
</body>
</html>