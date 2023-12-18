    <?php
    // include file koneksi ke database 
    include "konek.php";

    //menerima nilai dari kiriman form pendaftaran
    $username = $_POST["username"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = md5 ($_POST["password"]);

    //Query input menginput data kedalam tabel anggota
    $sql = "insert into pendaftaran (username,nama,email,password) values 
        ('$username','$nama','$email','$password')";

    //mengeksekusi/menjalankan query diatas
    $hasil = mysqli_query($kon,$sql);

    //kondisi apakah berhasil atau tidak
         if ($hasil) {
            echo '<script language="javascript">
            alert ("Berhasil");
            window.location="index.php";
            </script>';
         exit;
        }
        else {
            echo '<script language="javascript">
            alert ("Gagal");
            window.location="pendaftaran.php";
            </script>';
         exit;
        }
        
    ?>
