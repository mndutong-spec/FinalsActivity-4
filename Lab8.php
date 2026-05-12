<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Age: <input type="number" name="age"><br><br>

    Citizenship:
    <input type="text" name="citizenship"><br><br>

    <input type="submit" value="Check Eligibility">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $age = $_POST["age"];
    $citizenship = strtolower(trim($_POST["citizenship"]));

    if ($age >= 18) {

        if ($citizenship == "filipino") {
            echo "Eligible to vote";
        } else {
            echo "Not eligible: Must be a Filipino citizen";
        }

    } else {
        echo "Not eligible: Must be 18 or above";
    }
}
?>

</body>
</html>
