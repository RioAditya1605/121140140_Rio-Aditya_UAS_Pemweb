<!DOCTYPE html>

<?php
    include 'connect.php';

    $nama = '';
    $nim = '';
    $prodi = '';
    $email = '';
    $jeniskelamin = '';
    $tanggallahir = '';
    $alamat = '';

    if(isset($_GET['edit'])){
        $nim = $_GET['edit'];
        
        $query = "SELECT * FROM halaman_tabel WHERE NIM = '$nim'";
        $sql = mysqli_query($conn, $query);

        $result = mysqli_fetch_assoc($sql);

        $nama = $result['Nama'];
        $nim = $result['NIM'];
        $prodi = $result['Program_Studi'];
        $email = $result['Email'];
        $jeniskelamin = $result['Jenis_Kelamin'];
        $tanggallahir = $result['Tanggal_Lahir'];
        $alamat = $result['Alamat'];
        
        //var_dump($result);

        //die();
    }
?>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="Halaman.css">
</head>
<body>
    <header>
        </div>
        <img src="Gweh.jpg" alt="gambar" width="200" height="200">
        <nav>
            <ul>
                <?php
                    if(isset($_SESSION['admin'])){
                    ?>
                        <li><a href="Halaman Formulir.php">Halaman Formulir</a></li>
                        <li><a href="Halaman Tabel.php">Halaman Tabel</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    <?php
                    }else{
                    ?>
                        <li><a href="login.php">Login</a></li>  
                    <?php
                    }
                    ?>
            </ul>
        </nav>
    </header>

    <form action="proses.php" method="POST">
        <table>
            <tr>
                <td>
                    <label for="nama">Nama</label>
                </td>
                <td>
                    <input type="text" name="Nama" id="nama" required placeholder="Masukkan Nama" class="input" value="<?php echo $nama; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nim">NIM</label>
                </td>
                <td>
                    <input type="text" name="NIM" id="nim" required placeholder="Masukkan NIM" class="input" value="<?php echo $nim; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="prodi">Program Studi</label>
                </td>
                <td>
                    <input type="text" name="Program_Studi" id="prodi" required placeholder="Masukkan Program Studi" class="input" value="<?php echo $prodi; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email</label>
                </td>
                <td>
                    <input type="text" name="Email" id="email" required placeholder="Masukkan Email" class="input" value="<?php echo $email; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jeniskelamin">Jenis Kelamin</label>
                </td>
                <td>
                    <select name="Jenis_Kelamin" id="jeniskelamin" required  class="input select">
                        <option value="0">Pilih</option>
                        <option <?php if($jeniskelamin == 'Laki-Laki'){echo "selected";} ?> value="Laki-Laki">Laki-Laki</option>
                        <option <?php if($jeniskelamin == 'Perempuan'){echo "selected";} ?> value="Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tanggallahir">Tanggal Lahir</label>
                </td>
                <td>
                    <input <?php if(!isset($_GET['edit'])){echo "required";} ?>type="date" name="Tanggal_Lahir" id="tanggallahir" class="input" value="<?php echo $tanggallahir; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="alamat">Alamat</label>
                </td>
                <td>
                    <textarea name="Alamat" id="alamat" cols="40" rows="10" required placeholder="Masukkan Alamat"  class="input"><?php echo $alamat; ?></textarea>
                </td>
            </tr>

            <tr>
                <th>
                    <div>
                        <?php
                            if(isset($_GET['edit'])){
                            
                        ?>
                            <button type="submit" name="aksi" value="edit">Simpan Perubahan</button>
                        <?php
                            } else {
                        ?>
                            <button type="submit" name="aksi" value="add">Tambahkan</button>
                        <?php
                            }
                        ?>
                            <button type="button">
                                <a href="Halaman Tabel.php">kembali</a>
                            </button>
                    </div>
                </th>
            </tr>
        </table>
    </form>
    <footer>
        <p>Copyright Rio Aditya, UAS PemWeb</p>
    </footer>
</body>
</html>