<?php

class Mobil {

    public $nama, $merk, $warna,
    $KecepatanMaksimal,
    $JumlahPenumpang;

    public function tambahKecepatan(){
        return"Kecepatan bertambah!";
    }
}

class MobilSport extends Mobil {

    public function jalankanTurbo(){
        $this->turbo= true;
        return "Turbo dijalankan!";

    }
}

$mobil = new MobilSport();
echo $mobil->tambahKecepatan();
echo "<br>";
echo $mobil->jalankanTurbo();

?>