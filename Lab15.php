<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Enter month number (1-12): <input type="number" name="month">
    <input type="submit" value="Check Month">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $month = $_POST["month"];

    switch ($month) {
        case 1:
            echo "January";
            break;
        case 2:
            echo "February";
            break;
        case 3:
            echo "March";
            break;
        case 4:
            echo "April";
            break;
        case 5:
            echo "May";
            break;
        case 6:
            echo "June";
            break;
        case 7:
            echo "July";
            break;
        case 8:
            echo "August";
            break;
        case 9:
            echo "September";
            break;
        case 10:
            echo "October";
            break;
        case 11:
            echo "November";
            break;
        case 12:
            echo "December";
            break;
        default:
            echo "Invalid month number. Enter 1-12 only.";
    }
}
?>

</body>
</html>
