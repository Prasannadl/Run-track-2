<!DOCTYPE html>
<html>
<head>
    <title>Basic Calculator</title>
</head>
<body>
    <h1>Basic Calculation</h1>
    <form action="result.php" method="post">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
        $num1 = (float)$_POST['num1'];
        $num2 = (float)$_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Error: Division by zero";
                }
                break;
            default:
                $result = "Invalid Operation";
                break;
        }
        echo "<h2>Result: $result</h2>";
    } else {
        echo "<h2>No data received. Please go back and submit the form.</h2>";
    }
    ?>
    <a href="form.php">Back to Calculator</a>
</body>
</html>
