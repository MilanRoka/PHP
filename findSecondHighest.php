<!DOCTYPE html>
<html>

<head>
    <title>Second Highest Number Finder</title>
</head>

<body>
    <form action="find_second_highest.php" method="post">
        <label for="numbers">Enter numbers (comma-separated):</label><br>
        <input type="text" id="numbers" name="numbers"><br><br>
        <input type="submit" value="Find Second Highest">
    </form>
    <?php
    function findSecondHighest($arr)
    {
        $firstHighest = $arr[0];
        $secondHighest = null;

        foreach ($arr as $num) {
            if ($num > $firstHighest) {
                $secondHighest = $firstHighest;
                $firstHighest = $num;
            } elseif ($num < $firstHighest && ($secondHighest === null || $num > $secondHighest)) {
                $secondHighest = $num;
            }
        }

        return $secondHighest;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["numbers"];
        $numbers = explode(",", $input);
        $numbers = array_map("trim", $numbers);
        $numbers = array_map("intval", $numbers);

        $secondHighestNumber = findSecondHighest($numbers);
        echo "The second highest number is: " . $secondHighestNumber;
    }
    ?>
</body>

</html>