<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>

    <input type="submit" value="Login">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $correctUsername = "admin";
    $correctPassword = "1234";

    if ($username == $correctUsername && $password == $correctPassword) {
        echo "Login Successful";
    } else {
        echo "Invalid Username or Password";
    }
}
?>

</body>
</html>
