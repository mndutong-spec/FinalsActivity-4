<!DOCTYPE html>
<html>
<body>

<form method="post" action="">

    Number 1: <input type="number" name="num1"><br><br>
    Number 2: <input type="number" name="num2"><br><br>

    Operator:
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];

    switch ($operator) {

        case "+":
            $result = $num1 + $num2;
            echo "Result: " . $result;
            break;

        case "-":
            $result = $num1 - $num2;
            echo "Result: " . $result;
            break;

        case "*":
            $result = $num1 * $num2;
            echo "Result: " . $result;
            break;

        case "/":
            if ($num2 == 0) {
                echo "Cannot divide by zero";
            } else {
                $result = $num1 / $num2;
                echo "Result: " . $result;
            }
            break;

        default:
            echo "Invalid operator";
    }
}
?>

</body>
</html>
