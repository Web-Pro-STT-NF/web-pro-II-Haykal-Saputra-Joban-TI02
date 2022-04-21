<?php 
    class dispenser{
        protected $volume;
        protected $hargaSegelas;
        private $volumeGelas;
        public $namaMinuman;

        public function isi($vol)
        {
            $this->volume = $vol;
        }
        public function __construct($pembeli, $namaMinuman)
        {
            $this->pembeli = $pembeli;
            $this->meminum = $namaMinuman;
        }
        public function teh_tarik()
        {
            $this->harga = 20000;
            $this->vol -= 270;
            return "$this->pembeli membeli $this->meminum seharga $this->harga, volume wadah tersisa$this->vol";
        }
        public function nambah()
        {
            $this->harga = 15000;
            $this->vol -= 200;
            return "$this->pembeli membeli $this->meminum seharga $this->harga, volume wadah tersisa$this->vol";
        }
        public function nambah_lagi()
        {
            $this->harga = 17000;
            $this->vol -= 300;
            return "$this->pembeli membeli $this->meminum seharga $this->harga, volume wadah tersisa$this->vol";
        }
        public function getnama(){
            return $this->pembeli;
        }
        public function getminum(){
            return $this->meminum;
        }
        public function getvolume(){
            return $this->vol;
        }
        public function setvolume($volume){
            $this->vol = $volume;
        }

    }
