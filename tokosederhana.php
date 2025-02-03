<!DOCTYPE html>
<html>
<head>
	<title>toko sederhana</title>
</head>
<body><center>
<form action="#" method="post">
    <style>
        
    </style>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Grocery</title>
    <style>

        body {
  background-image: url('bgr.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            width: 800px;
            margin: auto;
            border: 5px solid orange;
            background-color: orange;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: aqua;
        }
        .price-input, .weight-input {
            width: 90%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .submit-btn {
            background-color: black;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: darkgray;
        }
        .item-select {
            width: 90%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <h2 style="text-align: center;">Toko Buah</h2>
    <table>
        <tr>
            <th>Nama Barang</th>
            <th>Harga Barang (Rp)</th>
            <th>Jumlah Barang / Berat (Kg)</th>
        </tr>
        <tr>
            <td>
                <label for="item1">Pilih Barang</label>
                <select name="item1" id="item1" class="item-select">
                    <option value="">--Pilih--</option>
                    <option value="Semangka">Semangka</option>
                    <option value="Apel">Apel</option>
                    <option value="Anggur">Anggur</option>
                </select>
            </td>
            <td><input type="text" name="harga1" class="input-harga" placeholder="Masukkan Harga"></td>
            <td><input type="text" name="berat1" class="input-berat" placeholder="Masukkan Berat (Kg)"></td>
        </tr>
        <tr>
            <td>
                <label for="item2">Pilih Barang</label>
                <select name="item2" id="item2" class="item-select">
                    <option value="">--Pilih--</option>
                    <option value="Semangka">Semangka</option>
                    <option value="Apel">Apel</option>
                    <option value="Anggur">Anggur</option>
                </select>
            </td>
            <td><input type="text" name="harga2" class="input-harga" placeholder="Masukkan Harga"></td>
            <td><input type="text" name="berat2" class="input-berat" placeholder="Masukkan Berat (Kg)"></td>
        </tr>
        <tr>
            <td>
                <label for="item3">Pilih Barang</label>
                <select name="item3" id="item3" class="item-select">
                    <option value="">--Pilih--</option>
                    <option value="Semangka">Semangka</option>
                    <option value="Apel">Apel</option>
                    <option value="Anggur">Anggur</option>
                    <option value="Salak">Salak</option>
                    <option value="Mangga
                </select>
            </td>
            <td><input type="text" name="harga3" class="input-harga" placeholder="Masukkan Harga"></td>
            <td><input type="text" name="berat3" class="input-berat" placeholder="Masukkan Berat (Kg)"></td>
        </tr>
        <tr>
            <td colspan="3" style="background-color: white;">
                <button type="submit" class="submit-btn">Total Semuanya</button>
            </td>
        </tr>
    </table>

</body>
</html>



<br>

        <?php
if (isset($_POST['total'])){
                $buah1 = $_POST ['1'];
                $buah2 = $_POST ['2'];
                $buah3 = $_POST ['3'];
                $kg1 = $_POST ['kg1'];
                $kg2 = $_POST ['kg2'];
                $kg3 = $_POST ['kg3'];
                $name1 = $_POST ['N1'];
                $name2 = $_POST ['N2'];
                $name3 = $_POST ['N3'];

        $harga1 = $buah1 * $kg1;
        $harga2 = $buah2 * $kg2;
        $harga3 = $buah3 * $kg3;
        $total = $harga1 + $harga2 + $harga3;
        
        if($total > 100000){
                $diskon = ($total/100)*20;
                $hargadiskon = $total - $diskon;
                echo "<table bgcolor='white'>
                        <tr>
                          <td>Nama Barang<hr></td>
                          <td>Harga Barang<hr></td>
                          <td>Jumlah Barang / Berat (Kg)<hr></td>
                          <td>Total Barang<hr></td>
                        </tr>
                        <tr>
                          <td>".$name1."<hr></td>
                          <td>Rp.".$buah1."<hr></td>
                          <td>".$kg1."<hr></td>
                          <td>Rp.".$harga1."<hr></td>
                          <td>
                        </tr>
                        <tr>
                          <td>".$name2."<hr></td>
                          <td>Rp.".$buah2."<hr></td>
                          <td>".$kg2."<hr></td>
                          <td>Rp.".$harga2."<hr></td>
                        </tr>
                        <tr>
                          <td>".$name3."<hr></td>
                          <td>Rp.".$buah3."<hr></td>
                          <td>".$kg3."<hr></td>
                          <td>Rp.".$harga3."<hr></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>harga awal<hr></td>
                          <td>Rp.".$total."<hr></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>terpotong (20%)<hr></td>
                          <td>Rp.".$diskon."<hr></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>Total<hr></td>
                          <td>Rp.".$hargadiskon."<hr></td>
                        </tr>";         
        } else {
                echo "<table bgcolor='aqua'>
                <tr>
                  <td>Nama Barang<hr></td>
                  <td>Harga Barang<hr></td>
                  <td>Jumlah Barang / Berat Kg<hr></td>
                  <td>Total Barang<hr></td>
                </tr>
                <tr>
                  <td>".$name1."<hr></td> 
                  <td>Rp.".$buah1."<hr></td>
                  <td>".$kg1."<hr></td>
                  <td>Rp.".$harga1."<hr></td>
                </tr>
                <tr>
                  <td>".$name2."<hr></td>
                  <td>Rp.".$buah2."<hr></td>
                  <td>".$kg2."<hr></td>
                  <td>Rp.".$harga2."<hr></td>
                </tr>
                <tr>
                  <td>".$name3."<hr></td>
                  <td>Rp.".$buah3."<hr></td>
                  <td>".$kg3."<hr></td>
                  <td>Rp.".$harga3."<hr></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>Total<hr></td>
                  <td>Rp.".$total."<hr></td>
                </tr>";
        }
}
?>

</body>

</html>