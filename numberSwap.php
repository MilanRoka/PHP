<!DOCTYPE html>
<html>
<head>
    <title>Number Swap</title>
</head>
<body>
    <h2>Number Swap</h2>
    <form method="post">
        Number 1: <input type="number" name="number1"><br>
        Number 2: <input type="number" name="number2"><br>
        <input type="submit" name="submit" value="Swap">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];

        echo "Before swapping: ";
        echo "Number 1: " . $number1 . ", Number 2: " . $number2 . "<br>";

        $temp = $number1;
        $number1 = $number2;
        $number2 = $temp;

        echo "After swapping: ";
        echo "Number 1: " . $number1 . ", Number 2: " . $number2;
    }
    ?>
</body>
</html>
