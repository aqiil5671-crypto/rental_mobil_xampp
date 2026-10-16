<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

?>
<!DOCTYPE html>
<html>

<head>

    <title>Tambah Penyewaan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<!DOCTYPE html>
<html>

<head>

    <title>Tambah Penyewaan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow">

                <div class="card-header bg-primary text-white">
                    Tambah Penyewaan Mobil
                </div>

                <div class="card-body">

                    <form method="POST" action="proses_tambah.php">

                        <div class="mb-3">

                            <label>Nama Penyewa</label>

                            <input type="text"
                                   name="nama"
                                   class="form-control"
                                   required
                                   placeholder="Contoh: Budi">

                        </div>

                        <div class="mb-3">

                            <label>Pilih Mobil</label>

                            <select name="mobil"
                                    class="form-select"
                                    required>

                                <option value="Toyota Avanza">
                                    Toyota Avanza - Rp 300.000/hari
                                </option>

                                <option value="Honda Brio">
                                    Honda Brio - Rp 250.000/hari
                                </option>

                                <option value="Toyota Fortuner">
                                    Toyota Fortuner - Rp 500.000/hari
                                </option>

                            </select>

                        </div>

                        <div class="mb-3">

                            <label>Lama Sewa (Hari)</label>

                            <input type="number"
                                   name="lama"
                                   class="form-control"
                                   required
                                   min="1"
                                   placeholder="Contoh: 3">

                        </div>

                        <button type="submit"
                                class="btn btn-primary w-100 mb-2">
                            Simpan Penyewaan
                        </button>

                        <a href="index.php"
                           class="btn btn-secondary w-100">
                            Kembali
                        </a>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>