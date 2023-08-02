<!DOCTYPE html>
<html>

<head>
    <title>Simple Calculator</title>
    <style>
        
        h2 {
            text-align: center;
            font-size: 50px;
            color: #666;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 50%;
            margin: 50px auto;
        }

        .input {
            font-size: 20px;
            width: 100%;
            height: 30px;
            margin: 10px 0;
            background: rgb(8, 120, 248);
            border: none;
            outline: none;
            border-radius: 20px;
            transition: all .5s;
            padding: 3px 10px;

        }

        .input:hover {
            background: rgba(8, 120, 248, 0.724);
        }

        .input:focus {
            background: rgba(8, 120, 248, 0.724);
        }

        form div {
            padding: 20px 0;
        }

        .text {
            margin: 50px 50px 50px 0px;
            font-size: 25px;

        }

        .btn {
            font-size: 20px;
            height: 50px;
            width: 90%;
            margin: auto;
            background: rgba(5, 226, 237, 0.874);
            border: none;
            outline: none;
            color: red;
            border-radius: 20px;
            transition: all .5s;

        }

        .btn:hover {
            background: rgba(8, 120, 248, 0.724);
        }
    </style>
</head>

<body>
    <h2>calculator</h2>
    <form method="post" accept="chack.php">
        <input class="input" type="number" name="num1" placeholder="Enter number 1" required>
        <input class="input" type="number" name="num2" placeholder="Enter number 2" required>
        <div>

            <input type="radio" name="operator" value="+" required> <span class="text">+</span>
            <input type="radio" name="operator" value="-" required> <span class="text">-</span>
            <input type="radio" name="operator" value="*" required> <span class="text">*</span>
            <input type="radio" name="operator" value="/" required> <span class="text">/</span>

        </div>
        <input class="btn" type="submit" name="calculate" value="Calculate">
    </form>
</body>

</html>


<?php
if (isset($_POST['calculate'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    switch ($operator) {
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
            if ($num2 == 0) {
                echo "Cannot divide by zero.";
                exit;
            }
            $result = $num1 / $num2;
            break;
        default:
            echo "Invalid operator.";
            exit;
    }


    echo "<div style='font-size: 24px; color: #007bff;  text-align: center;'>Result: $num1 $operator $num2 = $result</div>";
}
?>