<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime/Even</title>
</head>
<body>
    <form method="post">
        <input type="text" name="num" placeholder="Enter a number">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if($_POST['submit']){
            $num = $_POST['num'];
            $flag = 0;
            if($num == 1){
                echo "1 is neither prime nor composite";
            }
            else{
                for($i=2; $i<$num; $i++){
                    if($num % $i == 0){
                        $flag = 1;
                        break;
                    }
                }
                if($flag == 0){
                    echo "<br/>$num is a prime number";
                }
                else{
                    echo "<br/>$num is a composite number";
                }
            }
        }
    ?>
</body>
</html>