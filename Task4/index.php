<?php
$res ='';
if (isset($_GET['x']) && isset($_GET['c']) && isset($_GET['y'])) {
    $x = $_GET['x'];
    unset($_GET['x']);
    $c = $_GET['c'];
    unset($_GET['c']);
    $y = $_GET['y'];
    unset($_GET['y']);
    if (is_numeric($x) && is_numeric($y)) {
        switch ($c) {
            case '+':
                $res = $x + $y;
                break;
            case '-':
                $res = $x - $y;
                break;
            case '*':
                $res = $x * $y;
                break;
            case '/':
                $res = $y!=0 ? $x/$y : 'Error: Division by zero';
                break;
        }
    }
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <script>
            function resetRes() {
               document.getElementById('r').value='';
               document.getElementById('num1').value='';
               document.getElementById('num2').value='';
            }
        </script>
        <div class="d">
            <form action="index.php" method="get">
                <div>
                    <input value="<?php echo $res ?>" name="res" id="r" readonly>
                </div>
                <div>
                    <label for="num1">&nbsp;&nbsp; Number 1</label>
                    <input name="x" type="number" id="num1" step="0.1" required>
                </div>
                <div>
                    <select name="c">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                </div>
                <div>
                    <label for="num2">&nbsp;&nbsp; Number 2</label>
                    <input name="y" type="number" id="num2" step="0.1" required>
                </div>
                <div>
                    <input type="submit" value="=">
                    <button onclick="resetRes()">AC</button>
                </div>
            </form>
        </div>
    </body>
</html>
