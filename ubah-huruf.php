<?php
function ubah_huruf($string){
//kode di sini
//pseudocode
//1. buat manual perpusatakaan abjad alphabet
//2. looping per karakter pada parameter string
//3. tampung ke variable penampung: karakter pada posisi $i+1 di alphabetnya
//4. return penampung

    $huruf = "abcdefghijklmnopqrstuvwxyz";
    // $hurufb = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $hasil = "";
    for($i=0; $i<strlen($string); $i++){
        $posisi = strrpos($huruf, $string[$i]);
        $hasil .= substr($huruf,$posisi+1,1);
        // $hasil .= substr($hurufb,$posisi,1);
        // echo $posisi;
    }
    return $hasil;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br>".ubah_huruf('developer'); // efwfmpqfs
echo "<br>".ubah_huruf('laravel'); // mbsbwfm
echo "<br>".ubah_huruf('keren'); // lfsfo
echo "<br>".ubah_huruf('semangat'); // tfnbohbu

?>