<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Enter number (1-7): <input type="number" name="day">
    <input type="submit" value="Check Day">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $day = $_POST["day"];

    switch ($day) {
        case 1:
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "Wednesday";
            break;
        case 4:
            echo "Thursday";
            break;
        case 5:
            echo "Friday";
            break;
        case 6:
            echo "Saturday";
            break;
        case 7:
            echo "Sunday";
            break;
        default:
            echo "Invalid input. Enter 1 to 7 only.";
    }
}
?>

</body>
</html>
