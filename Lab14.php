<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Select Action:<br>
    1 = Add<br>
    2 = Edit<br>
    3 = Delete<br><br>

    Enter choice (1-3): <input type="number" name="choice">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $choice = $_POST["choice"];

    switch ($choice) {
        case 1:
            echo "You selected: Add";
            break;
        case 2:
            echo "You selected: Edit";
            break;
        case 3:
            echo "You selected: Delete";
            break;
        default:
            echo "Invalid selection. Choose 1 to 3 only.";
    }
}
?>

</body>
</html>
