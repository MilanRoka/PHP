<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descending Order</title>
</head>

<body>
    <form method="post">
        Enter the number:
        <input type="number" name="number" min="1" required placeholder="Your number here..">
        <input type="submit" value="Submit" />
    </form>
    <?php
    if ($_POST['number']) {
        $number = intval($_POST['number']);

        if ($number > 0) {
            for ($i = $number; $i >= 1; $i--) {
                echo $i . "<br>";
            }
        } else {
            echo "Please enter a positive number.";
        }
    }
    ?>
</body>
</html>