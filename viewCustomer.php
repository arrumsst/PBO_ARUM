<?php
require_once 'CustomerManager.php';

$customerManager = new CustomerManager();

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $customerManager->hapusCustomer($id);

    die("Customer dengan ID $id berhasil dihapus. <a href='viewCustomer.php'>Kembali</a>");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Customer</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="container">
    <h1>Daftar Customer</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customerManager->getCustomer() as $customer): ?>
                <tr>
                    <td><?= htmlspecialchars($customer['id']); ?></td>
                    <td><?= htmlspecialchars($customer['nama']); ?></td>
                    <td><?= htmlspecialchars($customer['email']); ?></td>
                    <td><?= htmlspecialchars($customer['alamat']); ?></td>
                    <td>
                        <a href="http://localhost/PBO_ARUM/viewCustomer.php?hapus=<?= urlencode($customer['id']); ?>" class="btn" style="background-color: #dc3545;">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>    
        </tbody>
    </table>
    <a href="addCustomer.html" class="btn" style="background-color: #28a745;">+ Tambah Customer</a>
    <a href="home.html" class="btn" style="background-color: #827081">Home</a>
</div>
</body>
</html>