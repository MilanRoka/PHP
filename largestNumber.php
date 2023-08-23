<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>largestNumber</title>
</head>
<body>
    <form method="post">
        Enter the first number:
        <input type="number" name="number1" placeholder="number here..">
        second:
        <input type="number" name="number2" placeholder="number here..">
        third:
        <input type="number" name="number3" placeholder="number here..">
        fourth;
        <input type="number" name="number4" placeholder="number here..">
        <input type="submit" value="Submit" />
    </form>
    <?php
    if ($_POST['number1']) {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $number3 = $_POST['number3'];
        $number4 = $_POST['number4'];
        if (
            $number1 > $number2 &&
            $number1 > $number3 &&
            $number1 > $number4
        ) {
            echo "The largest number is $number1";
        } elseif (
            $number2 > $number1 &&
            $number2 > $number3 &&
            $number2 > $number4
        ) {
            echo "The largest number is $number2";
        } elseif (
            $number3 > $number1 &&
            $number3 > $number2 &&
            $number3 > $number4
        ) {
            echo "<br/>The largest number is $number3";
        } else {
            echo "<br/>The largest number is $number4";
        }
    }
    ?>    
</body>
</html>