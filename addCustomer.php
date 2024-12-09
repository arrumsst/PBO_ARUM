<?php
require_once 'CustomerManager.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'] ?? '';
    $email = $_POST['email'] ?? '';
    $alamat = $_POST['alamat'] ?? '';

    if (!empty($nama) && !empty($email) && !empty($alamat)) {
        $customerManager = new CustomerManager();
        $customerManager->tambahCustomer($nama, $email, $alamat);
        header('Location: viewCustomer.php'); // Redirect ke daftar customer
        exit();
    } else {
        echo "Data tidak lengkap!";
    }
}
?>
