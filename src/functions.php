<?php
$sql = "localhost";
$name = "root";
$pwd = "";
$db = "movie";

$conn = mysqli_connect($sql, $name, $pwd, $db);

if (!$conn) {
   die("Koneksi Gagal" . mysqli_connect_error());
}

function query($query)
{
   global $conn;

   $result = mysqli_query($conn, $query);
   $rows = [];
   while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
   }
   return $rows;
}

function tambah($tambah)
{
   global $conn;

   $nama = htmlspecialchars($tambah["nama"]);
   $sinopsis = htmlspecialchars($tambah["sinopsis"]);
   $jenis = $tambah["jenis"];

   $poster = upload();
   if (!$poster) {
      return false;
   };

   $query = "INSERT INTO allmovie VALUES ('', '$poster', '$nama', '$sinopsis', '$jenis')";

   mysqli_query($conn, $query);
   

   return mysqli_affected_rows($conn);
}

function upload()
{

   $namaFile = $_FILES['poster']['name'];
   $error = $_FILES['poster']['error'];
   $tmpName = $_FILES['poster']['tmp_name'];

   $path = "../../assets/img/";

   if ($error === 4) {
      echo "<script>
               alert('Silahkan Pilih Gambar Terlebih Dahulu')
            </script>";
      return false;
   }

   $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
   $ekstensiGambar = explode('.', $namaFile);
   $ekstensiGambar = strtolower(end($ekstensiGambar));

   if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
      echo "<script>
               alert('Yang Anda Upload Bukan Gambar')
            </script>";
      return false;
   }

   $namaFileBaru = $namaFile;


   move_uploaded_file($tmpName, $path . $namaFileBaru);
   return $namaFileBaru;
}

function hapus($id) {
   global $conn;
   mysqli_query( $conn, "DELETE FROM allmovie WHERE id = $id");
   return mysqli_affected_rows($conn);
}

function update($update) {
   global $conn;

   $id = $update["id"];
   $nama = htmlspecialchars($update["nama"]);
   $sinopsis = htmlspecialchars($update["sinopsis"]);
   $tipe = $update["tipe"];
   $posterLama = $update["posterLama"];
   
   $poster = $posterLama; 


   if($_FILES['poster']['error'] !== 4) {
      $poster = upload();
      if($poster === false) {
         return false;
      }
   }

   $query = "UPDATE allmovie SET
               poster = '$poster', 
               nama = '$nama', 
               sinopsis = '$sinopsis', 
               tipe = '$tipe'
               WHERE id = $id;
               ";

   mysqli_query($conn, $query);
   
   return mysqli_affected_rows($conn);
}
