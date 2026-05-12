<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Enter Grade: <input type="number" name="grade">
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $grade = $_POST["grade"];

    if ($grade >= 90 && $grade <= 100) {
        echo "Excellent";
    } elseif ($grade >= 80 && $grade <= 89) {
        echo "Good";
    } elseif ($grade >= 70 && $grade <= 79) {
        echo "Average";
    } elseif ($grade < 70) {
        echo "Failed";
    } else {
        echo "Invalid grade";
    }
}
?>

</body>
</html>
