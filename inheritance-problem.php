<?php

    class Produk {
         public $judul,
                $penulis,
                $penerbit,
                $harga,
                $jmlHalaman,
                $waktuMain,
                $tipe;

        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = "")
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
            $this->tipe = $tipe;
        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        public function helloWorld() {
            return "Hello World!";
        }

        public function getInfoLengkap() {
            $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            if ($this->tipe == "Komik") {
                $str .= " - {$this->jmlHalaman} Halaman.";
            } else if ($this->tipe == "Game") {
                $str .= " ~ {$this->waktuMain} Jam.";
            }
            return $str;
        }
    }

    class CetakInfoProduk {
        public function cetak(Produk $produk) {
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
            return $str;
        }
    }

    $produk3 = new produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 45000, 100, 0, "Komik");

    $produk4 = new produk("CS", "peppy", "peppy", 0, 0, 500, "Game");
    
    echo "<hr>";

    echo "Komik : $produk3->judul, $produk3->penulis";
    echo "<br>";
    echo $produk3->getLabel();
    
    echo "<hr>";
    
    echo "Komik : $produk4->judul, $produk4->penulis";
    echo "<br>";
    echo $produk4->getLabel();

    echo "<hr>";
    echo $produk3->getInfoLengkap();
    echo "<br>";
    echo $produk4->getInfoLengkap();
?>