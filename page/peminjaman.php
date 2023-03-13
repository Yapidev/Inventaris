<div class="row">
    <center>
        <h2>
            Peminjaman Inventaris
        </h2>
        <hr>
    </center>
    <div class="col-lg-4">
    <div class="panel panel-primary">
            <div class="panel-heading">Peminjaman</div>
            <div class="panel-body">
                <form action="">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Kode Peminjaman</label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Peminjaman</label>
                            <input type="text" class="form-control">
                            <select name="" id="" class="form-control">
                                <option value="">Nama Pegawai</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <input type="text" class="form-control">
                            <select name="" id="" class="form-control">
                                <option value="">Laptop</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="number" class="form-control">
                        </div>
                        <div>
                            <button class="btn btn-md btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="panel panel-primary">
            <div class="panel-heading">Daftar Barang Dipinjam</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Pinjam</th>
                            <th>Nama Peminjam</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Tanggal Kembali</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>10-11-2021</td>
                            <td>Andika</td>
                            <td>Laptop</td>
                            <td>10</td>
                            <td>00-00-0000</td>
                            <td>
                                <label for="" class="label label-danger">Belum</label>
                            </td>
                            <td>
                                <a href="" class="btn btn-sm btn-primary">Konfirmasi</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>10-11-2021</td>
                            <td>Rohim</td>
                            <td>Laptop</td>
                            <td>10</td>
                            <td>00-00-0000</td>
                            <td>
                                <label for="" class="label label-warning">Dipinjam</label>
                            </td>
                            <td>
                                <a href="" class="btn btn-sm btn-primary">Konfirmasi</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>