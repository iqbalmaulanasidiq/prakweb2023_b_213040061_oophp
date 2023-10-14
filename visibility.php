<?php

    class Produk {
         public $judul,
                $penulis,
                $penerbit;
        protected $diskon = 0;
        private $harga;

        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        public function helloWorld() {
            return "Hello World!";
        }

        public function setDiskon($diskon) {
            $this->diskon = $diskon;
        }

        public function getHarga() {
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

        public function getInfoProduk() {
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $str;
        }
    }

    class Komik extends Produk {
        public $jmlHalaman;

        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0)
        {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jmlHalaman = $jmlHalaman;
        }

        public function getInfoProduk() {
            $str = "Komik : " . parent::getInfoProduk() . " ~ {$this->jmlHalaman} Halaman.";
            return $str;
        }
    }

    class Game extends Produk {
        public $waktuMain;

        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0)
        {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->waktuMain = $waktuMain;
        }


        public function getInfoProduk() {
            $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
            return $str;
        }
    }

    class CetakInfoProduk {
        public function cetak(Produk $produk) {
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
            return $str;
        }
    }

    $produk3 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 45000, 100, 0, "Komik");

    $produk4 = new Game("osu!", "peppy", "peppy", 0, 0, 500, "Game");
    
    echo "<hr>";

    echo "Komik : $produk3->judul, $produk3->penulis";
    echo "<br>";
    echo $produk3->getLabel();
    
    echo "<hr>";
    
    echo "Komik : $produk4->judul, $produk4->penulis";
    echo "<br>";
    echo $produk4->getLabel();

    echo "<hr>";
    echo $produk3->getInfoProduk();
    echo "<br>";
    echo $produk4->getInfoProduk();

    echo "<hr>";
    $produk3->setDiskon(50);
    echo $produk3->getHarga();
?>