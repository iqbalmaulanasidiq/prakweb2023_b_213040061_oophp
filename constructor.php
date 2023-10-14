<?php

    class Produk {
         public $judul,
                $penulis,
                $penerbit,
                $harga;

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
    }

    $produk1 = new produk();
    $produk1->judul = "Inuyasha";
    echo "Komik : $produk1->judul, $produk1->penulis";
    echo "<br>";
    echo $produk1->getLabel();

    echo "<hr>";

    $produk2 = new produk();
    $produk2->judul = "Boku no Hero Academia";
    echo "Komik : $produk2->judul, $produk2->penulis";
    echo "<br>";
    echo $produk2->getLabel();

    $produk3 = new produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 45000);

    $produk4 = new produk("One Piece", "Eiichiro Oda", "Shonen Jump", 60000);
    
    echo "<hr>";

    echo "Komik : $produk3->judul, $produk3->penulis";
    echo "<br>";
    echo $produk3->getLabel();
    
    echo "<hr>";
    
    echo "Komik : $produk4->judul, $produk4->penulis";
    echo "<br>";
    echo $produk4->getLabel();
?>