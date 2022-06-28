<?php

if(isset($_POST['cek'])){
    $cek = $_POST['cek'];
    $n = 10;
    $jml = 0;

    for($i = 0; $i < count($cek); $i++){
        $n;

        $jml += $n;
    }

    if($jml == 100){
        echo "Jantung Koroner $jml% <br>";
        echo "Gawat! Sebaiknya Anda segera ke Rumah Sakit Sekarang!";
    }
    else if($jml == 70 || $jml == 80 || $jml == 90){
        echo "Jantung Koroner $jml% <br>";
        echo "Sebaiknya Anda segera konsultasi ke dokter spesialis jantung";
    }
    else if($jml == 40 || $jml == 50 || $jml == 60){
        echo "Jantung Koroner $jml% <br>";
        echo "Sebaiknya Anda istirahat dengan cukup dan menghindari stress";
    }
    else if($jml == 10 || 20 || 30){
        echo "Jantung Koroner $jml% <br>";
        echo "Tenang! Anda Sedang baik-baik saja";
    }
}else{
    echo "Anda belum memilih, Boss!";
}

?>