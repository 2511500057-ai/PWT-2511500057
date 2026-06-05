<div class="content-header">
    <div class="container-fluid">
        <div class ="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Data Ekstrakurikuler</h1>
            </div>
        </div>
    </div>
</div>

<?php
if(isset($_GET['action'])) {
    if($_GET['action'] == "hapus") {
        $kd =$_GET['kd'];
        $query = mysqli_query($koneksi, "DELETE FROM ekstra_2511500057 where id_ekstra057 = '$kd'");
        if ($query){
            echo '
            <div class="alert alert-warning alert-dismissible">
            Berhasil Di Hapus</div>';
            echo '<meta http-equiv="refresh" content="1;url=index.php?page=ekstra251150057">';
        }
    }
}
?>
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <a href="index.php?page=tambah_ekstra251150057" class="btn btn-primary btn-sm">
            Tambah Ekstrakurikuler</a>
            <table class="table table-striped">
                <tread>
                    <tr>
                        <th>NO</th>
                        <th>Id Ekstrakurikuler</th>
                        <th>Nama Ekstrakurikuler</th>
                        <th>Keterangan</th>
                        <th>Semester</th>
                        <th>Tahun Ajaran</th>
                        <th>Aksi</th>
                    </tr>
                </tread>
                <?php
                $no =0;
                $query = mysqli_query($koneksi,"SELECT * FROM ekstra_2511500057");
                while ($result = mysqli_fetch_array($query) ) {
                    $no++
                    ?>
                    <tbody>
                        <tr>
                            <td><?= $no;?></td>
                            <td><?=$result['id_ekstra057']; ?></td>
                            <td><?=$result['nama_ekstra057']; ?></td>
                             <td><?=$result['ket057']; ?></td>
                             <td><?=$result['semester057']; ?></td>
                             <td><?=$result['thn_ajaran057']; ?></td>
                             <td>
                                <a href="index.php?page=ekstra251150057&action=hapus&kd=<?=  $result['id_ekstra057']
                                ?>" title="">
                                <span class="badge badge-danger">Hapus</span></a>
                                <a href="index.php?page=edit_ekstra251150057&kd=<?= $result['id_ekstra057'] ?>" title
                                =""><span class
                                ="badge badge-warning">Edit</span><a>
                             </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
            </div>
        </div>
    </div>
</div>