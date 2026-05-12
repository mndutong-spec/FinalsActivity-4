<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Enter Password: <input type="password" name="password">
    <input type="submit" value="Login">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $password = $_POST["password"];
    $correctPassword = "admin123";

    if ($password === $correctPassword) {
        echo "Access Granted";
    } else {
        echo "Access Denied";
    }
}
?>

</body>
</html>
