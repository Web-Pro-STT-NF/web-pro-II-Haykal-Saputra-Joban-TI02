<?php 
    class NilaiMahasiswa {
        var $nim;
        var $matakuliah;
        var $nilai;

    function __construct($nim,$matakuliah,$nilai)
    {
        $this->nim =$nim;
        $this->matkul =$matakuliah;
        $this->nilai =$nilai;
    }
    function nilai($nilai){
        if ($nilai >= 85){
            return "A";
        }elseif($nilai >= 70){
            return "B";
        }elseif($nilai >= 56){
            return "C";
        }elseif($nilai >= 36){
            return "D";
        }elseif($nilai >= 0){
            return "E";
        }else{
            return "I";
        }
    }

    function grade($nilai)
    {
        if ($nilai > 55) {
            return "LULUS";
        } else {
            return "TIDAK LULUS";
        }
    }
}