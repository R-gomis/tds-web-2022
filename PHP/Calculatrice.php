<form action="calculator.php" method="post">
    <input type="text" name="num1" placeholder="Enter first number" />
    <input type="text" name="num2" placeholder="Enter second number" />
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <button type="submit">Calculate</button>
</form>

<?php
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
    $num1 = (int) $_POST['num1'];
    $num2 = (int) $_POST['num2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            $result = $num1 / $num2;
            break;
        default:
            $result = "Invalid operation";
            break;
    }

    echo "Result: $result";
}
?>