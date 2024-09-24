<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2, h3 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        input[type="number"] {
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Kalkulator Pembayaran</h2>
        <form method="post">
            <input type="number" name="totalBayar" placeholder="Total Bayar" required>
            <input type="number" name="diskon" placeholder="Diskon (%)" required>
            <input type="submit" value="Hitung">
        </form>

        <?php 
        // Kelas Pembayaran 
        class Pembayaran { 
            private $totalBayar; 
            private $diskon; 
         
            public function __construct($totalBayar, $diskon) { 
                $this->totalBayar = $totalBayar; 
                $this->diskon = $diskon; 
            } 
         
            public function hitungDiskon() { 
                return $this->totalBayar * ($this->diskon / 100); 
            } 
         
            public function hitungTotalBayar() { 
                return $this->totalBayar - $this->hitungDiskon(); 
            } 
        } 
         
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
            $totalBayar = $_POST['totalBayar']; 
            $diskon = $_POST['diskon']; 
         
            $pembayaran = new Pembayaran($totalBayar, $diskon); 
         
            $totalDiskon = $pembayaran->hitungDiskon(); 
            $totalBersih = $pembayaran->hitungTotalBayar(); 
         
            echo "<div class='result'>"; 
            echo "<h3>Hasil Perhitungan:</h3>"; 
            echo "Total Bayar: Rp " . number_format($totalBayar, 2, ',', '.') . "<br>"; 
            echo "Diskon: " . $diskon . "% (Rp " . number_format($totalDiskon, 2, ',', '.') . ")<br>"; 
            echo "Total Bayar Setelah Diskon: Rp " . number_format($totalBersih, 2, ',', '.') . "<br>"; 
            echo "</div>"; 
        } 
        ?>
    </div>
</body>
</html>