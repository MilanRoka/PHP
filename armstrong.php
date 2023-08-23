<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number</title>
</head>

<body>
    <form method="post">
        Enter the number to check:
        <input type="number" name="number" placeholder="Your number here..">
        <input type="submit" value="Submit" />
    </form>
    <?php
    if ($_POST) {
        $number = $_POST['number'];
        $total = 0;
        $x = $number;

        while ($x != 0) {
            $rem = $x % 10;
            $total += $rem * $rem * $rem;
            $x = (int)($x / 10);
        }

        if ($number == $total) {
            echo "Yes, $number is an Armstrong number";
        } else {
            echo "No, $number is not an Armstrong number";
        }
    }
    ?>

</body>

</html>