<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    
<h1>PHP Calculator:</h1>
<fieldset>
    <legend>Calculate</legend>
<form action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " method="post">
    
<span>
    <input type="text" name="num01" placeholder="Number 1">
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="num02" placeholder="Number 2">
</span> 
    <button>Calculate</button>
</form>
</fieldset>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);

        // Error handling
        $errors = false;

        if ($operator == "*" && $num02 == 0) {
            echo "<p class='calc-error'>Multiplying by zero, REALLY?</p>";
            $errors = true;
        }

        if ($operator == "/" && $num02 == 0) {
            echo "<p class='calc-error'>You can't divide by 0!</p>";
            $errors = true;
        }

        if (empty($num01) || empty($num02) || empty($operator)) {
            echo "<p class='calc-error'>Please fill in both numbers!</p>";
            $errors = true;
        }

        if  (!is_numeric($num01)  || !is_numeric($num02)) {
            echo "<p class='calc-error'>Only use numbers!</p>";
            $errors = true;
        }

        // Calculate the numbers
        if ($errors == false) {
            $value = 0;
            switch ($operator) {
                case "+":
                    $value = $num01 + $num02;
                    break;
                case "-":
                    $value = $num01 - $num02;
                    break;
                case "*":   
                    $value = $num01 * $num02;
                    break;
                case "/":
                    $value = $num01 / $num02;
                    break;
                default:
                    echo "<p class='calc-error'>Something went wrong!</p>";
            }

            echo "<p class='calc-success'>$num01 $operator $num02 = $value</p>";
        }

    }
?>

</body>

</html>