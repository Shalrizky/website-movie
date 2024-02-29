<?php
require '../../functions.php';

$allMovie = query("SELECT * FROM allmovie");

if (isset($_POST["submit"])) {
   if (tambah($_POST) == 1) {
      echo  "<script>
              alert('Data berhasil ditambahkan'); 
              document.location.href = 'allMovie.php';
              </script>";
   } else {
      echo "<script>
        alert('Data gagal ditambahkan'); 
        document.location.href = 'allMovie.php';
        </script>";
   }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../../admin/css/all.css">
   <title>Admin</title>
</head>

<body>
   <header>
      <div class="container">
      </div>
      <nav class="top-nav">
         <div class="top-container">
            <div class="nav-brand">
               <h1>Admin Panel</h1>
            </div>
            <div class="nav-content">
               <ul>
                  <li><a href="#"><img src="../../../assets/img/nophoto.jpg" width="40px" style="border-radius: 100%; background: transparent;"></a></li>
                  <li><a href="#">Hello Admin</a></li>
                  <li><a href="#">Logout</a></li>
               </ul>
            </div>
         </div>
      </nav>
   </header>
   <main>
      <div class="container">
         <nav class="side-nav">
            <div class="search-bar">
               <input type="search" name="search" id="search" placeholder="Search...">
               <div class="button-search">
                  <button id="search">Cari</button>
               </div>
            </div>
            <ul>
               <li class="nav-item"><a href="homeAdmin.php">Dashboard</a></li>
               <li class="nav-item active"><a href="#">All</a></li>
               <li class="nav-item"><a href="#">Movies</a></li>
               <li class="nav-item"><a href="#">Series</a></li>
               <li class="nav-item"><a href="#">Trending</a></li>
               <li class="nav-item"><a href="#">Most Popular</a></li>
               <li class="nav-item"><a href="#">New Realese</a></li>
            </ul>
         </nav>
         <section class="table-section">
            <h2>All Chategory List</h2>
            <div class="action-buttons">
               <button id="tambah" onclick="openForm()">Add</button>
               <button id="ubah" onclick="openUpdate()">Update</button>
               <button id="hapus">Delete</button>
            </div>

            <div class="table-modify">
               <table>
                  <thead>
                     <tr>
                        <th> </th>
                        <th>No</th>
                        <th>Poster</th>
                        <th>Nama</th>
                        <th>Sinopsis</th>
                        <th>Tipe</th>
                        <th></th>
                     </tr>
                  </thead>
                  <?php $count = 1 ?>
                  <?php foreach ($allMovie as $all) : ?>
                     <tbody>
                        <tr>
                           <td>
                              <label class="checkbox-container">
                                 <input type="checkbox" name="check" id="check">
                                 <div class="checkmark"></div>
                              </label>
                           </td>
                           <td><?= $count ?></td>
                           <td>
                              <img src="../../../assets/img/<?= $all["poster"] ?>" height="80px" width="100px">
                           </td>
                           <td>
                              <?= $all["nama"] ?>
                           </td>
                           <td>
                              <?= $all["sinopsis"] ?>
                           </td>
                           <td>
                              <?= $all["tipe"] ?>
                           </td>
                           <td>
                              <ul>
                                 <li><a href="ubah.php?id=<?= $all["id"] ?>">Update</a></li>
                                 <li> <a href="hapus.php?id=<?= $all["id"] ?>" onclick="return konfirmasiHapus()">Delete</a></li>
                              </ul>
                           </td>
                        </tr>
                     </tbody>
                  <?php $count++;
                  endforeach; ?>
               </table>
            </div>
         </section>
      </div>

      <!-- pop up tambah -->
      <div class="form-popup" id="halTambah">
         <form action=" " method="post" enctype="multipart/form-data">
            <h3>Tambah Data</h3>

            <label for="poster">Poster:</label>
            <input type="file" id="poster" name="poster">

            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="nama" required>

            <label for="sinopsis">Sinopsis:</label>
            <textarea id="sinopsis" name="sinopsis" required></textarea>

            <label>Tipe:</label>
            <div class="radio">
               <div class="radio-option">
                  <label for="movie">
                     Movies
                     <input type="radio" id="movie" name="jenis" value="Movies" checked required>
                  </label>
               </div>
               <div class="radio-option">
                  <label for="series">
                     Series
                     <input type="radio" id="series" name="jenis" value="Series" required>
                  </label>
               </div>
            </div>
            <div class="button-container">
               <button type="submit" name="submit">Tambah</button>
               <button type="button" onclick="closeForm()">Batal</button>
            </div>
         </form>
      </div>
   </main>

   <script>
      function openForm() {
         document.getElementById("halTambah").style.display = "block";
      }

      function closeForm() {
         document.getElementById("halTambah").style.display = "none";
      }

      function konfirmasiHapus() {
         let konfirmasi = confirm("apakah anda yakin ingin mengapus file ini?");
         if(konfirmasi == true) {
            return true;
         }else {
            return false;
         }
      }
   </script>

</body>

</html>