<center><h2>DAFTAR INVENTARIS</h2>
</center>
<hr>

<a href="?p=tambah_barang" class="btn btn-md btn-primary"><span class="glyphicon glyphicon-plus
"></span></a>
<form class="navbar-form navbar-right" role="search" method="get">
        <div class="form-group">
          <input type="hidden" name="p" value="list_barang">
          <input type="text" class="form-control" placeholder="Cari Barang" name="cari">
        </div>
        <button type="submit" class="btn btn-default">Cari</button>
      </form>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Inventaris</th>
            <th>Nama Barang</th>
            <th>Kondisi</th>
            <th>Jumlah</th>
            <th>Ruang</th>
            <th>Tanggal Register</th>
            <th>Keterangan</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
    <?php
      @$cari = $_GET['cari'];
      $q_cari = "";
      if (!empty($cari)){
        $q_cari .= "and nama like '%" . $cari . "'%";

      }

      $sql = "SELECT * FROM inventaris LEFT JOIN ruang ON ruang.id_ruang = inventaris.id_ruang WHERE 1=1 $q_cari";
      $query = mysqli_query($koneksi, $sql);
      $cek = mysqli_num_rows($query);                                                                                                                                                                                                                 

      if ($cek > 0){
            $no = 1;
            while($data = mysqli_fetch_array($query)){
            ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['kode_inventaris']?></td>
                <td><?= $data['nama']?></td>
                <td><?= $data['kondisi']?></td>
                <td><?= $data['jumlah']?></td>
                <td><?= $data['nama_ruang']?></td>
                <td><?= $data['tanggal_register']?></td>
                <td><?= $data['keterangan']?></td>
                <td>
                <a href="?p=edit_barang" class="btn btn-md btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
                <a href="" class="btn btn-md btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                </td>
              </tr>
            <?php
            }
      }
    ?>

    </tbody>
</table>

<div class="float-left">
    Jumlah Barang : 1
</div>

<div style="float:right">
<nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

</div>