<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Ekstrakurikuler</h1>
      </div>
    </div>
  </div>
</div>
<?php
//kode otomatis
$carikode = mysqli_query($koneksi,"select max(id_ekstra057) from ekstra_2511500057") or die (
    mysqli_error());
$datakode = mysqli_fetch_array($carikode);
if($datakode) {
    $nilaikode = substr($datakode[0], 2);
    $kode = (int) $nilaikode;
    $kode = $kode + 1;
    $hasilkode = "E-".str_pad($kode, 3, "0", STR_PAD_LEFT);
} else {$hasilkode = "E-"; }
$_SESSION['KODE'] = $hasilkode;

if(isset($_POST['tambah'])) {
    $id_ekstra057 = $_POST['id_ekstra057'];
    $nama_ekstra057 = $_POST['nama_ekstra057'];
    $ket057	 = $_POST['ket057'];
    $semester057 = $_POST['semester057'];
    $thn_ajaran057	 = $_POST['thn_ajaran057'];

    $insert = mysqli_query($koneksi,"INSERT INTO ekstra_2511500057 values ('$id_ekstra057','$nama_ekstra057','$ket057','$semester057','$thn_ajaran057')");
    if ($insert) {
        echo '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"
        aria-hidden="true">×</button>
        <h5><i class="icon fas fa-info"></i> Info </h5>
        <h4>Berhasil Disimpan</h4></div>';
        echo '<meta http-equiv="refresh" content="1;url=index.php?page=ekstra251150057">';
    } else {
        echo '<div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"
        aria-hidden="true">×</button>
        <h5><i class="icon fas fa-info"></i> Info </h5>
        <h4>Gagal Disimpan</h4></div>';
    }
}
?>
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="card-body p-2">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="id_ekstra057">Id Ekstrakurikuler</label>
                            <input type="text" name="id_ekstra057" value="<?= $hasilkode; ?>" placeholder="Id Ekstrakurikuler" class="form-control" readonly>
                        </div>
                        
                        <div class="form-group">
                            <label for="nama_ekstra057">Nama Ekstrakurikuler</label>
                            <input type="text" name="nama_ekstra057" id="nama_ekstra057" placeholder="Nama Ekstrakurikuler" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="ket057">Keterangan</label>
                            <input type="text" name="ket057" id="ket057" placeholder="Keterangan" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="semester057">Semester</label>
                            <input type="text" name="semester057" id="semester057" placeholder="Semester" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="thn_ajaran057">Tahun Ajaran</label>
                            <input type="text" name="thn_ajaran057" id="thn_ajaran057" placeholder="Tahun Ajaran" class="form-control">
                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" name="tambah" value="simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>