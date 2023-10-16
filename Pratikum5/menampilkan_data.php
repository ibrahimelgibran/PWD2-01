<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .satu {
            width: 30px;
        }

        th:nth-child(2) {
            display: none;
        }

        .tr {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <table>

        <thead>
            <tr class="tr">
                <th class="satu">No</th>
                <th hidden>Nik</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Skill</th>
                <th>Mau Diapain</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
            $sql = "SELECT * FROM tb_dosen";
            $query = mysqli_query($koneksi, $sql);
            $nomor = 1;
            while ($dosen = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $nomor . "</td>";
                echo "<td hidden>" . $dosen['nik_dos'] . "</td>";
                echo "<td>" . $dosen['nm_dos'] . "</td>";
                echo "<td>" . $dosen['almt_dos'] . "</td>";
                echo "<td>" . $dosen['jkl_dos'] . "</td>";
                echo "<td>" . $dosen['skl_dos'] . "</td>";
                echo "<td>";
                echo "<a href='../form/form_edit_dosen.php?nik=" . $dosen['nik_dos'] . "'>Edit</a> | ";
                echo "<a href='../controller/ctrl_hapus.php?nik=" . $dosen['nik_dos'] . "'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>

</html>
