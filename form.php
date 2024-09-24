<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Diskon dengan OOP</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Perhitungan Diskon</h2>
        <form action="process.php" method="POST">
            <label for="totalBayar">Total Bayar:</label><br>
            <input type="number" id="totalBayar" name="totalBayar" required><br><br>

            <label for="diskon">Diskon (%):</label><br>
            <input type="number" id="diskon" name="diskon" required><br><br>

            <button type="submit">Hitung Total Bayar</button>
        </form>
    </div>
</body>
</html>