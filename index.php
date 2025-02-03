<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = '';

    if (is_numeric($num1) && is_numeric($num2)) {
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
                $result = ($num2 != 0) ? $num1 / $num2 : 'Error: Tidak Bisa Dibagi Dengan Nol';
                break;
            default:
                $result = 'Invalid Operator';
        }
    } else {
        $result = 'Invalid Input';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn-primary {
            width: 100%;
        }
        .alert {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Aplikasi Kalkulator</h2>
        <form method="post">
            <div class="form-group">
                <label>Nilai Pertama</label>
                <input type="text" name="num1" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Operator</label>
                <select name="operator" class="form-control" required>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </div>
            <div class="form-group">
                <label>Nilai Kedua</label>
                <input type="text" name="num2" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>
        <?php if (isset($result)) { ?>
            <div class="alert alert-info mt-3">Hasil: <?php echo $result; ?></div>
        <?php } ?>
    </div>
</body>
</html>
