<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Nilai</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./store.php" method="POST">
            <table cellpadding="8" class="w-100">
              <tr>
                <td>ID</td>
                <td><input class="form-control" type="text" name="id" size="20" required></td>
              </tr>
              <tr>
                <td>NIM</td>
                <td><input class="form-control" type="text" name="nim" size="20" required></td>
              </tr>
              <tr>
                <td>Kode Mata Kuliah</td>
                <td><input class="form-control" type="text" name="kode_matkul" size="20" required></td>
              </tr><tr>
                <td>Semester</td>
                <td><input class="form-control" type="text" name="semester" size="20" required></td>
              </tr>
              <tr>
                <td>Nilai</td>
                <td><input class="form-control" type="text" name="nilai" size="20" required></td>
              </tr>
              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan"></td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>