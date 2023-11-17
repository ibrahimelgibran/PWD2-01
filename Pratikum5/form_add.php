<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Pendaftaran</title>
    </head>
    <body>
        <div class="center-container">
        <form action="add.php" method="post">
            <table class="table">
                <tr>
                    <td class="kecilin"><label for="nik">NIK</label></td>
                    <td class=""td>: <input class="input" type="text" name="nik" placeholder="Masukan Nik" /></td>
                    <td rowspan="5"><img src="img/me.png" class="image" alt="Ibrahim El Gibran"  width="100%" style="border-radius: 50%;"></td>
                </tr>
                <tr>
                    <td class="kecilin"><label for="nama_dosen">Nama Dosen</label></td>
                    <td class="td">: <input class="input" type="text" name="nama_dosen" placeholder="Nama lengkap" /></td>
                </tr>
                <tr>
                    <td class="kecilin"><label for="alamat_dosen">Alamat Dosen</label></td>
                    <td>: <textarea class="input" name="alamat_dosen"></textarea></td>
                </tr>
                <tr>
                    <td class="kecilin"><label for="jenis_kelamin">Jenis Kelamin</label></td>
                    <td>: 
                        <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td class="kecilin"><label for="skill_dosen">Skill Dosen</label></td>
                    <td class="td">: 
                        <select name="skill_dosen">
                            <option>Programming IT</option>
                            <option>Nyuntik Pasta Prosesor</option>
                            <option>Ngerawat Virus</option>
                            <option>Operasi Casing</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input style="background-color: #DDA0DD;" class="btn btn-sm" type="submit" value="Tambah" name="daftar" />
                        <input style="background-color: #DDA0DD;" class="btn btn-sm" type="button" value="Gak Jadi" onclick="window.location.href='./gajadi.php'" />
                        <input style="background-color: #DDA0DD;" class="btn btn-sm" type="button" value="Cek View Data" onclick="window.location.href='./view_data.php'" />
                    </td>
                    <td></td>
                </tr>
            </table>
        </form>
        </div>
        
        <style>
/*STYLE CSS */
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
    }
    .table {
        border-collapse: collapse;
        width: 400px; 
    }

    .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
        }
        .table {
            border-collapse: collapse;
            width: 400px;
        }

        
    </style>

    </body>
    </html>
