<?php
include "../config/koneksi.php";

$nofak = $_POST['nofak'];

$sql = "UPDATE pesanan SET keterangan='LUNAS' WHERE nofak='$nofak'";
mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Makan Arza - Struk Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tfoot th {
            background-color: #ddd;
        }

        .center {
            text-align: center;
        }

        .thank-you {
            font-weight: bold;
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="center">
        <h2>Rumah Makan Arza</h2>
        <p>Jl. Rela No 20<br>Medan Tembung</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Jenis Pesanan</th>
                <th>Jumlah Beli</th>
                <th>Harga Satuan</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $subtotal = 0;
            $sql = "SELECT * FROM pesanan WHERE nofak='$nofak'";
            $hasil = mysqli_query($koneksi, $sql);

            while ($row = mysqli_fetch_array($hasil)) {
                echo "<tr>
                        <td>$row[3]</td>
                        <td>$row[4]</td>";

                $sql1 = "SELECT nama, harga FROM menu WHERE nama='$row[3]'";
                $hasil1 = mysqli_query($koneksi, $sql1);

                while ($row1 = mysqli_fetch_array($hasil1)) {
                    $harga = $row1[1];
                }

                $total = $row[4] * $harga;
                $subtotal += $total;

                echo "<td>$harga</td>
                      <td>$total</td>
                    </tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Total</th>
                <th><?php echo $subtotal; ?></th>
            </tr>
        </tfoot>
    </table>

    <div class="center thank-you">
         TERIMA KASIH 
    </div>

    <script>
        window.print();
    </script>
</body>
</html>
