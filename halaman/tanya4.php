<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css1.css">
    <title>CatCare</title>
</head>
<body>
    <div class ="header">
        <p class = "judul">SELAMAT DATANG</p>
        <p>Di SISTEM PAKAR DIAGNOSA PENYAKIT KULIT KUCING</p>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Proses diagnosa
        $gejala5 = $_POST['gejala5'];
        
        
        // Rule-based diagnosa
        if ($gejala5 == 'ya') {
            $diagnosis = header("location: jawaban3.php"); exit(); //melink ke gejala 6
        } else {
            $diagnosis = header("location: tanya5.php"); exit(); //melink ke gejala 10
        }

        // Menampilkan hasil diagnosa 
        echo "<h3>Hasil Diagnosa :</h3>";
        echo "<p>$diagnosis</p>";
    }
    ?>
    <form method="POST" action="">
        <div class ="hf">
            <h3>Silahkan input jawab pertanyaan dibawah ini</h3>
        </div>
        <div class = "pf">

            <p>Apakah kucing mengalami bintik-bintik kecil pada badan ?</p>
            <div class="inputGroup">
                <input id="radio1" name="gejala5" type="radio" value="ya" required/>
                <label for="radio1">ya</label>
            </div>
            <div class="inputGroup">
                <input id="radio2" name="gejala5" type="radio" value="tidak" required/>
                <label for="radio2">Tidak</label>
            </div>

            
            <br>
        </div>
            <input type="submit" value="Diagnosa">
    </form>
</body>
</html>
 