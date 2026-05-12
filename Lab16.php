<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Enter color (red, yellow, green):
    <input type="text" name="color">
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $color = strtolower(trim($_POST["color"]));

    switch ($color) {

        case "red":
            echo "Stop";
            break;

        case "yellow":
            echo "Slow down";
            break;

        case "green":
            echo "Go";
            break;

        default:
            echo "Invalid color input";
    }
}
?>

</body>
</html>
