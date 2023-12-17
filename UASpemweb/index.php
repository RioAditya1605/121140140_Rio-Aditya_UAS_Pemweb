<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="Halaman.css">
    <script src="script.js"></script>
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

    <section class="website">
        <h2>Web Pendaftaran Volunteer</h2>
        <p>Volunteer adalah seorang individu yang secara sukarela menyumbangkan waktu, energi, dan keterampilan mereka untuk membantu orang atau komunitas tanpa mengharapkan imbalan finansial sebagai imbalan. Kegiatan volunteering seringkali dilakukan dalam konteks organisasi nirlaba, lembaga amal, atau kegiatan sosial lainnya.
        Seorang volunteer melakukan kegiatan mereka tanpa adanya paksaan atau kewajiban finansial. Motivasi mereka mungkin beragam, tetapi yang utama adalah keinginan untuk memberikan kontribusi positif kepada orang lain atau masyarakat.
        Volunteer biasanya terlibat dalam kegiatan yang mendukung tujuan kemanusiaan atau sosial. Ini bisa melibatkan membantu orang miskin, penyediaan bantuan medis, pendidikan, perlindungan lingkungan, atau berbagai kegiatan amal lainnya.
        Banyak kegiatan volunteer diorganisir oleh lembaga nirlaba atau organisasi amal. Organisasi ini sering memiliki misi atau tujuan tertentu dan mengandalkan sukarelawan untuk membantu mereka mencapai tujuan tersebut.
        </p>

    </section>
    <footer>
        <p>Copyright Rio Aditya, UAS PemWeb</p>
    </footer>
</body>
</html>