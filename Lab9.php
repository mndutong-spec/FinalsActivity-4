<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Purchase Amount: <input type="number" name="amount" step="0.01"><br><br>
    <input type="submit" value="Calculate Discount">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $amount = $_POST["amount"];
    $discount = 0;

    if ($amount >= 1000) {
        $discount = 0.20;
    } elseif ($amount >= 500) {
        $discount = 0.10;
    } else {
        $discount = 0;
    }

    $discountedPrice = $amount - ($amount * $discount);

    echo "Original Amount: " . $amount . "<br>";
    echo "Discount: " . ($discount * 100) . "%<br>";
    echo "Final Price: " . $discountedPrice;
}
?>

</body>
</html>
