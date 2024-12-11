<?php

if (!isset($_SESSION['customer'])) {
    $_SESSION['customer'] = [
        ['id' => 1, 'nama_customer' => 'Arief', 'email' => 'Arief@example.com', 'no_telepon' => '081234567890'],
        ['id' => 2, 'nama_customer' => 'Sahbani', 'email' => 'Aban@example.com', 'no_telepon' => '081234567891'],
        ['id' => 3, 'nama_customer' => 'Marsha', 'email' => 'Marsha@example.com', 'no_telepon' => '081234567892'],
    ];
}

$customer = &$_SESSION['customer'];
?>