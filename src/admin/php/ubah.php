<?php
require '../functions.php';

$id = $_GET["id"];

$all = query("SELECT * FROM allmovie WHERE id = $id")[0];

if (isset($_POST["ubah"])) {
  if (update($_POST) > 0) {
    echo  "<script>
            alert('Data Berhasil diubah'); 
            document.location.href = 'list.php';
            </script>";
  } else {
    echo  "<script>
            alert('Data gagal diubah'); 
            document.location.href = 'list.php';
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
  <title>Document</title>
</head>

<body>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $all['id']; ?>">
    <input type="hidden" name="posterLama" id="posterLama" value="<?= $all['poster'] ?>">

    <label for="poster">Poster</label>
    <img src="../../assets/img/<?= $all['poster'] ?>" alt="" width="100px">
    <input type="file" name="poster" id="poster">

    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" value="<?= $all['nama']; ?>" required>

    <label for="sinopsis">Sinopsis:</label>
    <textarea id="sinopsis" name="sinopsis" required><?= $all['sinopsis']; ?></textarea>

    <label>Tipe:</label>
    <div class="radio">
      <div class="radio-option">
        <label for="movie">
          Movies
          <input type="radio" id="movie" name="tipe" value="Movies" <?php if ($all['tipe'] == 'Movies') {
                                                                      echo "checked";
                                                                    } ?> required>

        </label>
      </div>
      <div class="radio-option">
        <label for="series">
          Series
          <input type="radio" id="series" name="tipe" value="series" <?php if ($all['tipe'] == 'Series') {
                                                                        echo "checked";
                                                                      } ?> required>
        </label>

      </div>
    </div>


    <button type="submit" name="ubah">Update</button>
  </form>

</body>

</html>