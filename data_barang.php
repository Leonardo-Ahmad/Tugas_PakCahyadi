<?php

if (!isset($_SESSION['barang'])) {
    $_SESSION['barang'] = [
        ['id' => 1, 'nama_barang' => 'Komputer', 'harga' => 15000000, 'stok' => 10],
        ['id' => 2, 'nama_barang' => 'Iphone', 'harga' => 13000000, 'stok' => 20],
        ['id' => 3, 'nama_barang' => 'Tablet', 'harga' => 4000000, 'stok' => 15],
    ];
}

$barang = &$_SESSION['barang'];
?>