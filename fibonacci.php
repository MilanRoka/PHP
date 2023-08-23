<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fibonacci</title>
</head>

<body>
    <form method="post">
        Enter the number:
        <input type="number" name="number" placeholder="Your number here..">
        <input type="submit" value="Submit" />
    </form>
    <?php
    if ($_POST) {
        $number = $_POST['number'];        // Retrieve the value of 'number' from the POST data
        $first = 0;
        $second = 1;
        echo "<br/> Fibonacci series for first $number numbers:<br/>";
        echo "\n";
        echo $first . "\n";
        echo $second . "\n";

        for ($i = 2; $i < $number-1; $i++) {

            $third = $first + $second;  // Calculate the next number in the Fibonacci sequence by summing the previous two

            // if () {  // Check if the calculated Fibonacci number is greater than or equal to the input number

            //     break;// Exit the loop when the Fibonacci value reaches or exceeds the input number
            // }

            echo $third . "\n"; // Output the current Fibonacci number

            $first = $second;   // Update the value of $first with the previous value of $second
            $second = $third;   // Update the value of $second with the calculated Fibonacci number
        }
    }
    ?>



</html>