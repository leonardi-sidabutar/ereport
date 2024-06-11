<!DOCTYPE html>
<html>

<head>
    <title>Cetak Laporan Data</title>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .container {
        width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    header img {
        width: 100px;
        height: auto;
        margin-right: 10px;
    }

    .header-text {
        text-align: center;
        flex-grow: 1;
    }

    .header-text h2,
    .header-text h3,
    .header-text h4 {
        margin: 0;
    }

    /* Menghilangkan border pada tabel informasi proyek */
    .project-info table {
        border: none;
    }

    .project-info th,
    .project-info td {
        border: none;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    .total-row {
        font-weight: bold;
    }

    .total-row td:first-child {
        /* Menargetkan sel pertama pada baris total */
        text-align: right;
        /* Meratakan teks ke kanan */
    }

    /* CSS untuk bagian bawah (tempat, tanggal, dll.) */
    .bottom-section {
        text-align: right;
        /* Rata kanan */
        margin-top: 20px;
    }

    .header-section div {
        /* Menargetkan div yang berisi teks header */
        text-align: center;
        align-items: center;
    }
    </style>
</head>

<body onload="window.print()">
    <div class="container">
        <header class="header-section">
            <img src="assets/logo/pertamina.png" alt="Logo Perusahaan">
            <div class="header-text">
                <h2>PT PERUSAHAAN GAS NEGARA Tbk</h2>
                <h3>NEGOSIASI HARGA PEKERJAAN</h3>
                <h4>TAHUN ANGGARAN 2024</h4>
            </div>
        </header>

        <?php
        // include 'db_connect.php'; // Sertakan file koneksi database

        // if (!isset($_GET['project_id'])) {
        //     echo "Data tidak lengkap.";
        //     exit;
        // }

        // $project_id = $_GET['project_id'];

        // // Mengambil data proyek dari database
        // $qry_project = $conn->query("SELECT p.name as project_name, p.start_date, p.end_date, p.area, p.description
        //                             FROM project_list p
        //                             WHERE p.id = $project_id");
        // $project = $qry_project->fetch_assoc();

        // $project_name = $project['project_name'];
        // $start_date = date("d M Y", strtotime($project['start_date']));
        // $end_date = date("d M Y", strtotime($project['end_date']));

        // // Array untuk pilihan area proyek
        // $area_options = array(
        //     "0" => "Medan Amplas",
        //     "1" => "Medan Area",
        //     "2" => "Medan Barat",
        //     "3" => "Medan Baru",
        //     "4" => "Medan Belawan",
        //     "5" => "Medan Deli",
        //     "6" => "Medan Denai",
        //     "7" => "Medan Helvetia",
        //     "8" => "Medan Johor",
        //     "9" => "Medan Kota",
        //     "10" => "Medan Labuhan",
        //     "11" => "Medan Maimun",
        //     "12" => "Medan Marelan",
        //     "13" => "Medan Perjuangan",
        //     "14" => "Medan Petisah",
        //     "15" => "Medan Polonia",
        //     "16" => "Medan Sunggal",
        //     "17" => "Medan Selayang",
        //     "18" => "Medan Tembung",
        //     "19" => "Medan Tuntungan",
        //     "20" => "Medan Timur"
        // );

        // // Mengambil nilai area proyek dari database
        // $project_area = $project['area']; 

        // // Menampilkan nama area proyek yang sesuai
        // $displayed_area = isset($area_options[$project_area]) ? $area_options[$project_area] : "Area tidak valid";

        // // Mengambil daftar tugas dari database
        // $qry_tasks = $conn->query("SELECT t.task, t.satuan, t.volume, t.harga_satuan, (t.volume * t.harga_satuan) as jumlah_biaya 
        //                             FROM task_list t 
        //                             WHERE t.project_id = $project_id 
        //                             ORDER BY t.task ASC");

        // // Menghitung total harga pekerjaan (exclude PPN)
        // $total_harga_pekerjaan = 0;
        // while ($row = $qry_tasks->fetch_assoc()) {
        //     $total_harga_pekerjaan += $row['jumlah_biaya'];
        // }

        // // Perhitungan total harga pembulatan
        // $total_pembulatan = ceil($total_harga_pekerjaan / 100) * 100; 
        ?>

        <div class="project-info">
            <table>
                <tr>
                    <th>Nama Kegiatan</th>
                    <!-- <td><?php echo $project_name; ?></td> -->
                </tr>
                <tr>
                    <th>Area/Hosbu/Proyek</th>
                    <!-- <td><?php echo $displayed_area; ?></td> -->
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <!-- <td><?php echo $project['description']; ?></td> -->
                </tr>
                <tr>
                    <th>Tanggal Mulai</th>
                    <!-- <td><?php echo $start_date; ?></td> -->
                </tr>
                <tr>
                    <th>Tanggal Target Selesai</th>
                    <!-- <td><?php echo $end_date; ?></td> -->
                </tr>
            </table>
        </div>

        <table>
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>URAIAN PEKERJAAN</th>
                    <th>SATUAN</th>
                    <th>VOLUME</th>
                    <th>HARGA SATUAN (Rp)</th>
                    <th>JUMLAH BIAYA (Rp)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><b>Pelanggan KI</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <!-- <?php $i = 1;  // Mulai dari 1 untuk sub-nomor ?>
                <?php $qry_tasks->data_seek(0);  // Reset pointer query untuk kembali ke awal ?>
                <?php while ($row = $qry_tasks->fetch_assoc()) : ?> -->
                <tr>
                    <!-- <td>1.<?php echo $i++; ?></td>
                    <td><?php echo $row['task']; ?></td>
                    <td><?php echo $row['satuan']; ?></td>
                    <td><?php echo $row['volume']; ?></td>
                    <td>Rp. <?php echo number_format($row['harga_satuan'], 0, ',', '.'); ?></td>
                    <td>Rp. <?php echo number_format($row['jumlah_biaya'], 0, ',', '.'); ?></td> -->
                </tr>
                <?php endwhile; ?>
            </tbody>
            <tfoot>
                <tr class="total-row">
                    <td colspan="5">Total Harga Pekerjaan Exclude PPN</td>
                    <!-- <td>Rp. <?php echo number_format($total_harga_pekerjaan, 0, ',', '.'); ?></td> -->
                </tr>
                <tr class="total-row">
                    <td colspan="5">Total Harga Pembulatan</td>
                    <!-- <td>Rp. <?php echo number_format($total_pembulatan, 0, ',', '.'); ?></td> -->
                </tr>
            </tfoot>
        </table>

        <div class="bottom-section">
            <br>
            <!-- <p>Medan, <?php echo date("d M Y"); ?></p> -->
            <p>Disetujui Oleh,</p>
            <br><br><br><br>
            <p>PT Perusahaan Gas Negara Tbk</p>
        </div>
    </div>
</body>

</html>