<?php
    include 'connect.php';

    $query = "SELECT * FROM halaman_tabel;";
    $sql = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tabel</title>
    <link rel="stylesheet" href="Halaman Tabel.css">
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

    <section>
        <h1>Daftar Mahasiswa</h1>
        <div>
            <button onclick="success()" class="btn_green">
                <a href="Halaman Formulir.php">tambah</a>
            </button>
        </div>
        <div>
            <table class="table-mahasiswa" style="overflow-x: scroll;" id="table">
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Program Studi</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                <?php
                    while($result = mysqli_fetch_assoc($sql)){
                ?>
                <tr>
                    <td>
                        <?php echo $result['Nama']; ?>
                    </td>
                    <td>
                        <?php echo $result['NIM']; ?>
                    </td>
                    <td>
                        <?php echo $result['Program_Studi']; ?>
                    </td>
                    <td>
                        <?php echo $result['Email']; ?>
                    </td>
                    <td>
                        <?php echo $result['Jenis_Kelamin']; ?>
                    </td>
                    <td>
                        <?php echo $result['Tanggal_Lahir']; ?>
                    </td>
                    <td>
                        <?php echo $result['Alamat']; ?>
                    </td>
                    <td>
                        <button onclick="success()" class="btn_blue">
                            <a href="Halaman Formulir.php?edit=<?php echo $result['NIM']; ?>">edit</a>
                        </button>
                        <button class="btn_red">
                            <a href="proses.php?hapus=<?php echo $result['NIM']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">hapus</a>
                        </button>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </section>
    <footer>
        <p>Copyright Rio Aditya, UAS PemWeb</p>
    </footer>
</body>
</html>