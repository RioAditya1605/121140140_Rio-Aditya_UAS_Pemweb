<?php
    include 'connect.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){
            
            $nama = $_POST['Nama'];
            $nim = $_POST['NIM'];
            $prodi = $_POST['Program_Studi'];
            $email = $_POST['Email'];
            $jeniskelamin = $_POST['Jenis_Kelamin'];
            $tanggallahir = $_POST['Tanggal_Lahir'];
            $alamat = $_POST['Alamat'];

            $query = "INSERT INTO halaman_tabel VALUES('$nama', '$nim', '$prodi', '$email', '$jeniskelamin', '$tanggallahir', '$alamat')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: Halaman Tabel.php");
                //echo "Data Berhasil Ditambahkan <a href='Halaman Tabel.php'>[Home]</a>";
            } else {
                echo $query;
            }

            //echo $nama." ".$nim." ".$prodi." ".$email." ".$jeniskelamin." ".$tanggallahir." ".$alamat;

            //echo "Tambah Data <a href='Halaman Tabel.php'>[Home]</a>";
        } else if($_POST['aksi'] == "edit"){
            echo "Edit Data <a href='Halaman Tabel.php'>[Home]</a>";
            $nama = $_POST['Nama'];
            $nim = $_POST['NIM'];
            $prodi = $_POST['Program_Studi'];
            $email = $_POST['Email'];
            $jeniskelamin = $_POST['Jenis_Kelamin'];
            $tanggallahir = $_POST['Tanggal_Lahir'];
            $alamat = $_POST['Alamat'];

            $query = "UPDATE halaman_tabel SET Nama = '$nama', Program_Studi = '$prodi', Email = '$email', Jenis_Kelamin = '$jeniskelamin', Tanggal_Lahir = '$tanggallahir', Alamat = '$alamat' WHERE NIM = '$nim';";
            $sql = mysqli_query($conn, $query);
        }
    }

    if(isset($_GET['hapus'])){
        $nim = $_GET['hapus'];
        $query = "DELETE FROM halaman_tabel WHERE NIM = '$nim'";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: Halaman Tabel.php");
            //echo "Data Berhasil Ditambahkan <a href='Halaman Tabel.php'>[Home]</a>";
        } else {
            echo $query;
        }



        //echo "Hapus Data <a href='Halaman Tabel.php'>[Home]</a>";
    }
?>