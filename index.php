<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

?>
<!DOCTYPE html>
<html>
    
<!DOCTYPE html>
<html>
<head>

    <title>Sistem Penyewaan Mobil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <h2 class="text-center text-primary fw-bold mb-4">
        🚗 RENTAL MOBIL
    </h2>

    <div class="card shadow">

        <div class="card-header bg-dark text-white">
            Daftar Penyewaan Mobil
        </div>

        <div class="card-body">

            <a href="tambah.php" class="btn btn-primary mb-3">
                + Tambah Penyewaan
            </a>

            <table class="table table-bordered table-hover text-center">

                <thead class="table-primary">

                    <tr>
                        <th>No</th>
                        <th>Nama Penyewa</th>
                        <th>Mobil</th>
                        <th>Lama Sewa</th>
                        <th>Total Harga</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>

                </thead>

                <tbody>

                <?php

                include 'koneksi.php';

                $data = mysqli_query(
                    $koneksi,
                    "SELECT * FROM penyewaan ORDER BY id DESC"
                );

                $no = 1;

                while ($row = mysqli_fetch_array($data)) {

                ?>

                <tr>

                    <td>
                        <?php echo $no++; ?>
                    </td>

                    <td class="text-start">
                        <?php echo htmlspecialchars($row['nama_penyewa']); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($row['mobil']); ?>
                    </td>

                    <td>
                        <?php echo $row['lama_sewa']; ?> Hari
                    </td>

                    <td>
                        Rp <?php echo number_format(
                            $row['total_harga'],
                            0,
                            ',',
                            '.'
                        ); ?>
                    </td>

                    <td>

                        <?php if ($row['status'] == 'Disewa') { ?>

                            <span class="badge bg-warning text-dark">
                                Sedang Disewa
                            </span>

                        <?php } else { ?>

                            <span class="badge bg-success">
                                Selesai
                            </span>

                        <?php } ?>

                    </td>

                    <td>

                        <?php if ($row['status'] == 'Disewa') { ?>

                            <a href="selesai.php?id=<?php echo $row['id']; ?>"
                               class="btn btn-success btn-sm">
                                ✔ Selesai
                            </a>

                        <?php } ?>

                        <a href="hapus.php?id=<?php echo $row['id']; ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Hapus data ini?')">
                            🗑 Hapus
                        </a>

                    </td>

                </tr>

                <?php } ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>