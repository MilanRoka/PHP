<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancatenate</title>
</head>

<body>
    <form method="post">
        <input type="text" name="str1" required placeholder="Enter a first string">
        <input type="text" name="str2" required placeholder="Enter another string">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if ($_POST) {
        $number = $_POST['submit'];

        $str1 = $_POST['str1'];
        $str2 = $_POST['str2'];

        $length1 = strlen($str1);
        $length2 = strlen($str2);

        $maxLength = max($length1, $length2);

        $str3 = '';

        for ($i = 0; $i < $maxLength; $i++) {
            if ($i < $length1) {
                $str3 .= $str1[$i];
            }
            if ($i < $length2) {
                $str3 .= $str2[$i];
            }
        }

        echo "<br/>Concatenated string is: $str3";
    }
    ?>
</body>

</html>