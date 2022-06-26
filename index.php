<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <?php
        include 'navbar.php';
    ?>

    <br><br><br>
    <div class="container">
        <h1 class="text-center">Diagnosa Penyakit Jantung</h1>
        <br>
        <form action="diagnosa.php" method="post">
        <table class="table table-dark table-hover table-bordered border border-danger ">
            <tr>
                <td>No</td>
                <td>Gejala</td>
                <td>Choice</td>
            </tr>
            <tr>
                <td>01</td>
                <td>Nyeri Dada</td>
                <td>
                    <input type="checkbox" name="cek[]" id="">
                </td>
            </tr>
            <tr>
                <td>02</td>
                <td>Bahu kiri terasa tidak enak</td>
                <td>
                    <input type="checkbox" name="cek[]" id="">
                </td>
            </tr>
            <tr>
                <td>03</td>
                <td>Keringat Dingin</td>
                <td>
                    <input type="checkbox" name="cek[]" id="">
                </td>
            </tr>
            <tr>
                <td>04</td>
                <td>Sesak Napas</td>
                <td>
                    <input type="checkbox" name="cek[]" id="">
                </td>
            </tr>
            <tr>
                <td>05</td>
                <td>Gangguan Pencernaan</td>
                <td>
                    <input type="checkbox" name="cek[]" id="">
                </td>
            </tr>
            <tr>
                <td>06</td>
                <td>Mual</td>
                <td>
                    <input type="checkbox" name="cek[]" id="">
                </td>
            </tr>
            <tr>
                <td>07</td>
                <td>Detak jantung tudak teratur</td>
                <td>
                    <input type="checkbox" name="cek[]" id="">
                </td>
            </tr>
            <tr>
                <td>08</td>
                <td>Pembengkakan pada jantung</td>
                <td>
                    <input type="checkbox" name="cek[]" id="">
                </td>
            </tr>
            <tr>
                <td>09</td>
                <td>Punggung tidak terasa enak</td>
                <td>
                    <input type="checkbox" name="cek[]" id="">
                </td>
            </tr>
            <tr>
                <td>10</td>
                <td>Sakit kepala</td>
                <td>
                    <input type="checkbox" name="cek[]" id="">
                </td>
            </tr>
        </table>

        <br>

        <input type="submit" class="btn btn-success" value="Lihat Hasil">
        </form>
    </div>

    <?php
        include 'footer.php';
    ?>
</body>
</html>