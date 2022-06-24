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
        echo "Sebaiknya Anda Bunuh Diri Saja! <br>Eits! Jangan marah ini hanya sekedar saran";
    }
    else if($jml == 70 || $jml == 80 || $jml == 90){
        echo "Jantung Koroner $jml% <br>";
        echo "Gawat! Saya Sarankan Anda ke Rumah Sakit Sekarang";
    }
    else if($jml == 40 || $jml == 50 || $jml == 60){
        echo "Jantung Koroner $jml% <br>";
        echo "Astaga, Bro! Sepertinya Anda Sedang tidak baik-baik saja";
    }
    else if($jml == 10 || 20 || 30){
        echo "Jantung Koroner $jml% <br>";
        echo "Tenang, Bro! Anda Sedang baik-baik saja";
    }
}

?>